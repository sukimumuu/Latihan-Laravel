<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login.index');
    }
    public function register(){
        return view('register.index');
    }

    public function regis(Request $req){
        User::create([
           'name' => $req->name,
           'nohp' => $req->nohp,
           'email' => $req->email,
           'password' => bcrypt($req->password),
        ]);
        return view('login.index');
    }
    public function loginc(Request $req){
        if(Auth::attempt($req->only('email','password'))){
            return view('main.index');
        }
        return view('login.index');
    }
    public function logout(){
        Auth::logout();
        return view('login.index');
    }
}
