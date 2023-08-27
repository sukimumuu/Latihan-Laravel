<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function edit(Request $req){
        return view('profil.edit',[
            'user' => $req->user(),
            'title' => "Edit Profil"
        ]);
    }
    public function update(Request $req){
        $req->user()->update(
            $req->all()
        );
        return redirect()->route('profil');
    }
}
