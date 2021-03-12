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
        $credentials = [
            'email' => $request->email,
            'password' =>  $request->password
        ];
        dd(password_hash("1", PASSWORD_DEFAULT));
//        dd(password_hash("1", PASSWORD_DEFAULT));
        if (Auth::attempt($credentials)) {
            redirect()->route('company');
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
        $request->validate([
            'email' =>  'unique:users',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->psw);
        $user->save();
        return redirect('login');
    }

}
