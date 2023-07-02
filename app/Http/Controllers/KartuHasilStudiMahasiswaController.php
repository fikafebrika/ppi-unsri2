<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KartuHasilStudiMahasiswaController extends Controller
{
    //

    public function index()
    {
        return view('mahasiswa.kartu-hasil-studi.kartu-hasil-studi');
    }
}
