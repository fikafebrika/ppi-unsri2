<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginVerifikatorController extends Controller
{
    public function index()
    {

        // Pengecekan apakah admin sudah login, jika ya, arahkan langsung ke halaman beranda admin
        if (Auth::guard('verifikator')->check()) {
            return redirect('/verifikator/beranda');
        }

        return view('verifikator.auth.login');
    }

    public function authenticate(Request $request)
    {
        // dd($request);

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);


        // Coba melakukan proses login dengan menggunakan guard 'admin'
        if (Auth::guard('verifikator')->attempt($credentials)) {
            $request->session()->regenerate();
            // Jika berhasil login, redirect ke halaman beranda admin
            return redirect('/verifikator/beranda');
        }

        // Jika gagal login, arahkan kembali ke halaman login dengan pesan error
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::guard('verifikator')->logout();
        return redirect('/verifikator/login');
    }
}
