<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {

        //ambil data mahasiswa yang sedang login
        $user = auth()->user();

        // dd($user);

        return view('mahasiswa.profil-mahasiswa.profil', [
            "user" => $user
        ]);
        // return view('mahasiswa.profil', compact('data'));
    }



    //  public function store(Request $request )
    // {

    //     Profil::create($request->all());
    //     return redirect()->back('success', 'data berhasil ditambah');

    // }
}
