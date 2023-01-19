<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function register(){
        return view('Auth.register');
    }

    public function getLogin(Request $req){
        if(Auth::attempt($req->only('email','password'))){
            return redirect()->route('dashboard.menu');
        }
        return redirect()->route('login');
    }
}
