<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function getLogin()
    {
        return view('login');
    }

    function postLogin(Request $request)
    {
  //      dd(password_hash("1", PASSWORD_DEFAULT));
        $credentials = [
            'email' => $request->email,
            'password' =>  $request->password
        ];
        if (Auth::attempt($credentials)) {
            return redirect('management');
        } else {
            return back()->withInput();
        }
    }

    function getSignup()
    {
        return view('signup');
    }

    function postSignup(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'email' =>  'unique:users',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login.get');
    }

    function getHome(){
        return view('management');
    }

    function getProfile(){
        return view('profile');
    }
}
