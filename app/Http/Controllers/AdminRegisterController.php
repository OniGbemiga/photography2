<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use App\Providers\WelcomeNewUserEvent;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;

class AdminRegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8','confirmed'],
        ]);

        if (Auth::attempt('terms' => 1)) {
            
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->terms = $request->has('terms') ? true : false;
            $user->user_image = public_path('/images/person_1.jpg');
            $user->save();
        }

        return redirect('/admin/auth/login');
    }
}
