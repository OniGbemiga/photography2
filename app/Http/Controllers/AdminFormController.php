<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Provider\Image;
use App\Blog;
use Illuminate\Support\Facades\Storage;

class AdminFormController extends Controller
{
    public function adminPost(){
        $blogs = Blog::latest()->get();
        return view('admin.post')->with('blogs',$blogs);
    }

    public function adminCreate(){
        return view('admin.form.create');
    }

    public function adminStore()
    {
        $blog = Blog::create($this->validateRequest());
        $this->storeImage($blog);
        return redirect('admin/form/edit_delete')->with('Successful');
    }

    public function adminEditDelete(){
        $blogs = Blog::latest()->paginate(8, ['*'], 'posts_per_page');
        return view('admin.form.edit_delete')->with('blogs',$blogs);
    }

    public function adminEditPost($id){
        $blogs = Blog::find($id);
        return view('admin.form.edit_post')->with('blogs',$blogs);
    }

    public function adminUpdatePost(Blog $blog, $id){
        $blog = Blog::whereId($id)->update($this->validateRequest());
        $this->storeImage($blog);
        return redirect('/admin/form/edit_delete')->with('Successful');
    }

    public function adminDeletePost($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/admin/form/edit_delete')->with('Successful');

    }

    private function validateRequest(){
        return request()->validate([
            'blog_image' => 'sometimes|File|image|max:500000',
            'title' => 'required|max:50|min:2',
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
