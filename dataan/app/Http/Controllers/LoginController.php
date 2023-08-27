<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function process(Request $req){
        $this->validate($req,[
            'email' => ['required'],
            'password' => ['required'],
        ]);
        
        if(Auth::attempt($req->only('email','password'))){
            return redirect()->route('home');
        }
        return back();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
