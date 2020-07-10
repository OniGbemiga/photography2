<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::latest()->get();
        //dd($blog);
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
        $this->storeFile($blog);

//        dd($blog);
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
        //dd($blog);
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
            'blog_file' => 'File',
            'title' => 'required|unique:blogs|max:50|min:2',
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

    private function storeFile($blog){
        if ( !is_dir(public_path('/blog_file'))){
            mkdir(public_path('/blog_file'), 0777);
            $blog->update([
                'blog_file' => \request()->blog_file->store('blog_file','public'),
            ]);
        }
        else{
            $blog->update([
                'blog_file' => \request()->blog_file->store('blog_file','public'),
            ]);
        }
    }
}