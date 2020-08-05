<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Session;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $validate = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $remember_token = $request->has('remember') ? true : false;

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember_token)) {
            //if successfull then redirect to the intended view
            Session::put('email', $request->input('email'));
            $user = User::where('email', $email)->first();
            $id = $user->id;
            return back()->with('id', $id)->with('success', 'You are logged in');
        } else {
            Session::flash('error', 'Email and Password does not match any data,Kindly re-enter your details');
            return redirect()->back();
        }
    }



    public function logout(Request $request)
    {

        Auth::logout();
        return back()->with('Success', 'You logged out');
    }
}
