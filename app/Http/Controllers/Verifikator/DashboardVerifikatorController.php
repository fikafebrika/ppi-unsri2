<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardVerifikatorController extends Controller
{
    //


    public function index()
    {

        $verifikator = Auth::guard('verifikator')->user();
        // dd($verifikator->id);


        $verifikasi = Verifikasi::where('verifikator_id', $verifikator->id)->get();

        // dd($verifikasi);


        // Simpan user_id yang diklik dalam session Laravel
        // Session::put('selectedUserId', $users->id);

        return view('verifikator.index', [

            "list_verifikasi" => $verifikasi
        ]);
    }
}
