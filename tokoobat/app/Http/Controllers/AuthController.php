<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function create(Request $req){
        User::create([
            'name' => $req->name,
            'email'=> $req->email,
            'password'=> bcrypt($req->password),
        ]);
        return redirect()->route('login');
    }
}
