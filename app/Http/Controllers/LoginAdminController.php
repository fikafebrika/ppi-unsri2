<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    //
    public function index()
    {
        // return view('login.index', [
        //     'title' => 'Login',
        //     'active' => 'login',
        // ]);

        return view('verifikator.auth.login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // dd(Auth::attempt($credentials));


        $request->session()->regenerate();
        return redirect()->intended('/verifikator/beranda');


        return back()->with('loginError', 'Login Failed!');
    }
}
