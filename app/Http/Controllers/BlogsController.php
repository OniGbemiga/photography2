<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$blogs = Blog::count_all();
        $blog = Blog::latest()->paginate(5);
        return view('pages.blog')->with('blogs',$blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = Blog::create($this->validateRequest($request));
        $this->storeImage($blog);
        return redirect('blogs')->with('Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blogs.show')->with('blogs', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit')->with('blogs',$blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validateRequest($request){
        return request()->validate([
            'blog_image' => 'sometimes|File|image|max:500000',
            'title' => 'required|unique:blogs|max:50|min:2',
            'short_message' => 'required|max:90|min:10',
            'message' => 'required',
        ]);
    }

    private function storeImage($blog){
        if (request()->hasFile('blog_image')){
            $blog->update([
                'blog_image' => request()->blog_image->store('uploads' , 'public'),
            ]);
            $blog_image = \Intervention\Image\Facades\Image::make(public_path('storage/' . $blog->blog_image));
                //->fit(800,500);
            $blog_image->save();
        }
    }
}
