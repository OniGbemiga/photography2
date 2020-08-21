<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$profiles = Profile::get();
        //dd($profiles);
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.profile')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'user_id' => 'required',
            'name' => 'required',
            'email' => 'required|e-mail',
            'twitter' => 'required|url',
            'facebook' => 'required|url',
            'instagram' => 'required|url',
            'number' => 'required',
            'address' => 'required',
            'image' => 'required|File|image',
            'about' => 'required',
            'skill' => 'required',
            'pound' => 'required',
            'studio' => 'required',
            'finished' => 'required',
            'happy' => 'required',
        ]);

        if($request->hasFile('image')){
            //get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/profile_image', $fileNameToStore);
            //$image = Image::make(public_path("storage/{$fileNameToStore}"))->fit(20,20);
         }
          else {
              $fileNameToStore = 'noimage.jpg';
              //return redirect('/posts')->with('error', 'Image not Created');
          }

        $profile = new Profile();
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->twitter = $request->input('twitter');
        $profile->facebook = $request->input('facebook');
        $profile->instagram = $request->input('instagram');
        $profile->number = $request->input('number');
        $profile->address = $request->input('address');
        $profile->about = $request->input('about');
        $profile->skill = $request->input('skill');
        $profile->pound = $request->input('pound');
        $profile->studio = $request->input('studio');
        $profile->finished = $request->input('finished');
        $profile->happy = $request->input('happy');
        //$this->storeImage($profile);
        $profile->image = $fileNameToStore;

        $id = Auth::user()->id;
        $user = User::find($id);
        $user->profile()->save($profile);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request,[
            'user_id' => 'required',
            'name' => 'required',
            'email' => 'required|e-mail',
            'twitter' => 'required|url',
            'facebook' => 'required|url',
            'instagram' => 'required|url',
            'number' => 'required',
            'address' => 'required',
            'image' => 'File|image',
            'about' => 'required',
            'skill' => 'required',
            'pound' => 'required',
            'studio' => 'required',
            'finished' => 'required',
            'happy' => 'required',
        ]);

        if($request->hasFile('image')){
            //get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/profile_image', $fileNameToStore);
            //$image = Image::make(public_path("storage/{$fileNameToStore}"))->fit(20,20);
         }
          else {
              $fileNameToStore = 'noimage.jpg';
              //return redirect('/posts')->with('error', 'Image not Created');
          }
        
        $profile = Profile::find($id);
        //dd($profile);
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->twitter = $request->input('twitter');
        $profile->facebook = $request->input('facebook');
        $profile->instagram = $request->input('instagram');
        $profile->number = $request->input('number');
        $profile->address = $request->input('address');
        $profile->about = $request->input('about');
        $profile->skill = $request->input('skill');
        $profile->pound = $request->input('pound');
        $profile->studio = $request->input('studio');
        $profile->finished = $request->input('finished');
        $profile->happy = $request->input('happy');
        if ($request->hasFile('image')) {
            $profile->image = $fileNameToStore;
        }

        $id = Auth::user()->id;
        $user = User::find($id);
        $user->profile()->save($profile);
        return back();
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
}
