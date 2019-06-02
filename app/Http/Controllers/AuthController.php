<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;
use Redirect;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if(($request->remember && Sentinel::authenticateAndRemember($credentials)) || Sentinel::authenticate($credentials)){
            return Redirect::route('home');
        }else{
            return Redirect::back();
        }
    }
    
    public function logout()
    {
        if(Sentinel::logout()){
            return Redirect::route('login');
        }else{
            return Redirect::back();
        }
    }
}
