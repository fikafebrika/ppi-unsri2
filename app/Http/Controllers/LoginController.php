<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // return view('login.index', [
        //     'title' => 'Login',
        //     'active' => 'login',
        // ]);

        return view('mahasiswa.auth.login');
    }

    public function authenticate(Request $request)
    {


        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/beranda');
            // if (auth()->user()->status  === "verifikator") {
            //     return redirect()->intended('/verifikator/beranda');
            // } else if ((auth()->user()->status === "mahasiswa")) {

            // }
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
