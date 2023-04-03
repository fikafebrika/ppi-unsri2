<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nikmhs' => 'required',
            'nokta' => 'required|max:6',
            'profesiutama' => 'required',
            'image' => 'image|file|max:1024',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|confirmed'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['password'] = bcrypt($validatedData['password']);


        User::create($validatedData);
        return redirect('/');

    }
}
