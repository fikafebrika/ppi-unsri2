<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
    }

    public function updateProfileUser(Request $request, $id, User $user)
    {
        dd($request->file('image'));

        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'nikmhs' => 'required',
            'nokta' => 'required',
            'profesiutama' => 'required',
            'image' => 'image|file|max:1024',
        ];

        $data = User::findOrFail($id);

        if ($request->email != $data->email) {
            $rules['email'] = 'required|email|unique:users';
        }

        $validatedData = $request->validate($rules);

        dd($request->file('image'));

        if ($request->file('image')) {
            //kalau gambar lamanya ada
            if ($request->image) {
                Storage::delete($request->image);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }



        $data->update($validatedData);

        return redirect('/profil')->with('success', 'Profil has been updated!');
    }
}
