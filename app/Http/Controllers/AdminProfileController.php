<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Profile;
use App\User;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::first();
        //dd($profiles);
        return view('admin.profile')->with('profiles',$profiles);
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
        $profile = Profile::create($this->validateRequest());
        $this->storeImage($profile);

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

    private function validateRequest(){
        return request()->validate([
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
    }

    private function storeImage($profile){
        if (request()->hasFile('image')){
            $profile->update([
                'image' => request()->image->store('profile_image' , 'public'),
            ]);
            $image = \Intervention\Image\Facades\Image::make(public_path('storage/' . $profile->image));
                //->fit(800,500);
            $image->save();
        }
    }
}
