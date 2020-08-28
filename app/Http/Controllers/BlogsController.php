<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Blog;
use App\Profile;
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
        $blogs = Blog::latest()->paginate(8, ['*'], 'blog_page');
        return view('pages.blog')->with('blogs',$blogs);
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

}
