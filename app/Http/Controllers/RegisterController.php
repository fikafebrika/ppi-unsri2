<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller

{

    public function index()
    {
        //return view index yang ada di dalam folder register
        // return view('register.index', [
        //     'title' => 'Register',
        //     'active' => 'register',
        // ]);

        return view('mahasiswa.auth.register');
    }


    public function store(Request $request)
    {

        //validasi
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'nikmhs' => 'required',
            'nokta' => 'required|max:6',
            'profesiutama' => 'required',
            'image' => 'image|file|max:1024',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|confirmed'
        ]);

        if ($request->file('image')) {
            //simpan gambar di folder post-images
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        //enkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);


        User::create($validatedData);

        return redirect('/')->with('success', 'Registrasi Berhasil, Silahkan Login');
    }

    public function checkSlug(Request $request)
    {

        $username = SlugService::createSlug(User::class, 'username', $request->name);
        return response()->json(['username' => $username]);
    }
}
