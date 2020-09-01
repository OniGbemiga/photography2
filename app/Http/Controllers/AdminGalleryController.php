<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Gallery;
use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class AdminGalleryController extends Controller
{
    // public function __construct()
    //  {
    //      $this->middleware('auth');
    //  }

    public function adminGallery(){

        $images = Gallery::latest()->paginate(30, ['*'], 'pages_per_pictures');
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('/admin/gallery')->with('images',$images)->with('user',$user);
    }


    public function store(){

        if (! is_dir(public_path('/gallery'))) {
            mkdir(public_path('/gallery'), 0777);
        }
        $images = Collection::wrap(request()->file('file'));

        $images->each(function($image){
            $basename = Str::random();
            $original = $basename . '.' . $image->getClientOriginalExtension();
            $thumbnail = $basename . '_thumb.' . $image->getClientOriginalExtension();

            Image::make($image)
                ->fit(250,250)
                ->save(public_path('/gallery/'. $thumbnail));

            $image->move(public_path('/gallery'), $original);

            Gallery::create([
                'original' => '/gallery/' . $original,
                'thumbnail' => '/gallery/' . $thumbnail,
                'tag' => ''
            ]);
        });

        //dd($images);
        return view('/admin/gallery');
    }

    public function adminGalleryDelete(Gallery $gallery){
        File::delete([
            public_path($gallery->original),
            public_path($gallery->thumbnail),
        ]);

        $gallery->delete();

        return redirect('/admin/gallery');
    }
}
