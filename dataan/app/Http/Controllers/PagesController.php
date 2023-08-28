<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PagesController extends Controller
{
    public function index(){
        return view('welcome',[
            "title" => "Dashboard"
        ]);
    }
    public function login(){
        return view('auth.login');
    }
    public function profil(Request $req){
        return view('profil.setting', [
            'user' => $req->user(),
            'title' => "Settings Account"
        ]);
    }
    public function category(){
        $category = Category::all();
        return view('category.index', compact('category'), [
            'title' => "Category Games"
        ]);
    }
}
