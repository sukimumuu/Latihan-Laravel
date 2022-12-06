<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Register(){
        return view('register.index');
    }
    public function Login(){
        return view('login.index');
    }
    public function registload(Request $req){
         User::create([
           'name' => $req->name,
           'email' => $req->email,
           'password'=>bcrypt($req->password),
           'date'=> $req->date,
        ]);
        return view('login.index');
    }
    public function loginload(Request $req){
          if(Auth::attempt($req->only('email', 'password'))){
            return view('welcome');
          }
          return view('login.index');
    }
    public function logout(){
        Auth::logout();
        return view('login.index');
    }
     
}
