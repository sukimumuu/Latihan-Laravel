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
        if (Auth::attempt($req->only('email','password'))) {
            return view('pages.landing_page/index');
        }
        return view('Auth.login');  
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}
