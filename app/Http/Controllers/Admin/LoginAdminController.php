<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    //
    public function index()
    {

        // Pengecekan apakah admin sudah login, jika ya, arahkan langsung ke halaman beranda admin
        if (Auth::guard('admin')->check()) {
            return redirect('/admin/beranda');
        }

        return view('admin.login.login');
    }

    public function authenticate(Request $request)
    {
        // dd($request);

        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);


        // Coba melakukan proses login dengan menggunakan guard 'admin'
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            // Jika berhasil login, redirect ke halaman beranda admin
            return redirect('/admin/beranda');
        }

        // Jika gagal login, arahkan kembali ke halaman login dengan pesan error
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
