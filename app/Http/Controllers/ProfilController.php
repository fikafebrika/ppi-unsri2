<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;

class ProfilController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('mahasiswa.profil',compact('data'));


    }
  


     public function store(Request $request )
    {
       
        Profil::create($request->all());
        return redirect()->back('success', 'data berhasil ditambah');
          
    }
}
