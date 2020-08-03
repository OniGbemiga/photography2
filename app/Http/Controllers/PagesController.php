<?php

namespace App\Http\Controllers;
use App\Gallery;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
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
