<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardVerifikatorController extends Controller
{
    //


    public function index()
    {
        $users = User::all();


        // Simpan user_id yang diklik dalam session Laravel
        // Session::put('selectedUserId', $users->id);

        return view('verifikator.index', [

            "users" => $users
        ]);
    }
}
