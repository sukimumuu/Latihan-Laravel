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
}
