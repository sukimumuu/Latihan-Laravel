<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('Auth.login');
    }
    public function takeData(Request $req){
        if (Auth::attempt($req->only('name','password'))) {
            return redirect()->route('index');
        }
        return view('Auth.login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }

}
