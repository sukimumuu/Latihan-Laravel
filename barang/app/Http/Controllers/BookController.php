<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $book = Buku::all();
        return view('Admin.crud_buku.index',compact('book'));
    }
    public function add(){
        return view('Admin.crud_buku.add');
    }
    public function create(Request $req){
        $add_book = Buku::create($req->all());
        return redirect()->route('crud_index');
    }
    public function edit($id){
        $book = Buku::find($id);
        return view('Admin.crud_buku.edit',compact('book'));
    }
    public function update(Request $req, $id){
        $book = Buku::find($id);
        $book->update($req->all());
        return redirect()->route('crud_index');
    }
}
