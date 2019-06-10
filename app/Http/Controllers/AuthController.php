<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

use Sentinel;
use Redirect;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if(($request->remember && Sentinel::authenticateAndRemember($credentials)) || Sentinel::authenticate($credentials)){
            return Redirect::route('home')->with('success', 'Sesión iniciada correctamente');
        }else{
            return Redirect::back()->with('error', 'Usuario y/o contraseña incorrectos');
        }
    }
    
    public function logout()
    {
        if(Sentinel::logout()){
            return Redirect::route('login')->with('error', 'Sesión cerrada correctamente');
        }else{
            return Redirect::back();
        }
    }

    public function getForgotPassword()
    {
        return view('auth.passwords.email');
    }

    public function postForgotPassword(Request $request)
    {
        dd('Estoy en recuperar contraseña');
    }
}
