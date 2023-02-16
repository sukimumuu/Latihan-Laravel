<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index(){
        $writer = Writer::all();
        return view('Admin.writer.index',compact('writer'));
    }
    public function add(){
        return view('Admin.writer.add');
    }
    public function create(Request $req){
        $writer = Writer::create($req->all());
        return redirect()->route('writer.index');
    }
    public function edit($id){
        $writer = Writer::find($id);
        return view('Admin.writer.edit',compact('writer'));
    }
    public function update(Request $req, $id){
        $writer = Writer::find($id);
        $writer->update($req->all());
        return redirect()->route('writer.index');
    }
    public function delete($id){
        $writer = Writer::find($id);
        $writer->delete();
        return redirect()->route('writer.index');
    }
}
