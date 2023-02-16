<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $book = Book::with('writer','category')->get();
        $writer = Writer::all();
        $category = Category::all();
        return view('Admin.crud_buku.index',compact('book','writer','category'));
    }
    public function add(){
        $writer = Writer::all();
        $category = Category::all();
        return view('Admin.crud_buku.add',compact('writer','category'));
    }
    public function create(Request $req){
        $add_book = Book::create($req->all());
        return redirect()->route('crud_index');
    }
    public function edit($id){
        $book = Book::find($id);
        return view('Admin.crud_buku.edit',compact('book'));
    }
    public function update(Request $req, $id){
        $book = Book::find($id);
        $book->update($req->all());
        return redirect()->route('crud_index');
    }
    public function delete($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('crud_index');
    }
}
