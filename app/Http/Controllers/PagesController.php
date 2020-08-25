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
        return view('pages.index')->with('profiles',$profiles);
    }

    public function about(){

        $profiles = Profile::all();
        //dd($profiles);
        return view('pages.about')->with('profiles',$profiles);
    }

    public function blog(){
        return view('pages.blog');
    }

    public function collection(){
        $images = Gallery::latest()->paginate(24, ['*'], 'pictures_per_page');
        return view('pages.collection')->with('images',$images);
    }

    public function contact(){
        return view('pages.contact');
    }

    public function services(){
        return view('pages.services');
    }
}
