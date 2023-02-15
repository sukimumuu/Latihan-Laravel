<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $jumlah_user = User::all();
        return view('Admin.index',compact('jumlah_user'));
    }
}
