<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Blog;
use App\Profile;
use App\Gallery;
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
        $images = Gallery::all();
        return view('pages.blog')->with('blogs',$blogs)->with('images',$images);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        $blog = Blog::where('id',$blog)->firstOrFail();
        $images = Gallery::all();
        return view('blogs.show')->with('blogs', $blog)->with('images',$images);
    }

}
