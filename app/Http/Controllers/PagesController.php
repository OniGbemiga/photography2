<?php

namespace App\Http\Controllers;
use App\Gallery;
use App\User;
use App\Profile;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $profiles = Profile::all();
        $images = Gallery::all();
        return view('pages.index')->with('profiles',$profiles)->with('images',$images);
    }

    public function about(){

        $profiles = Profile::all();
        $images = Gallery::all();
        //dd($profiles);
        return view('pages.about')->with('profiles',$profiles)->with('images',$images);
    }

    // public function blog(){

    //     return view('pages.blog');
    // }

    public function collection(){
        $profiles = Profile::all();
        $images = Gallery::latest()->paginate(24, ['*'], 'pictures_per_page');
        return view('pages.collection',compact('profiles','images'));
    }

    public function contact(){
        $profiles = Profile::all();
        $images = Gallery::all();
        return view('pages.contact')->with('profiles',$profiles)->with('images',$images);
    }

    public function services(){
        $profiles = Profile::all();
        $images = Gallery::all();
        return view('pages.services')->with('profiles',$profiles)->with('images',$images);
    }
}
