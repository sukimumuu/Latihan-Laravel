<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add(){
        return view('category.add',[
            'title' => "Add Category" 
        ]);
    }
    public function store(Request $req){
        $category = Category::create($req->all());
        return redirect()->route('category');
    }
}
