<?php

namespace App\Http\Controllers;

use App\Models\PendidikanFormal;
use Illuminate\Http\Request;

class RekognisiPencapaianController extends Controller
{
    //

    public function index()
    {
        $user = auth()->user();
        // dd($user);
        // dd();

        // $pendidikan_formal_user = PendidikanFormal::where('user_id', $id)->get();


        $pendidikanFormal = PendidikanFormal::where('user_id', $user->id)->pluck('nilai_akademik')->all();

        // dd($pendidikanFormal->status_validasi);

        $pendidikanFormalStatus = PendidikanFormal::where('user_id', $user->id)->pluck('status_validasi')->all();

        // dd($pendidikanFormalStatus[0]);

        // dd($pendidikanFormal[0]);

        $nilai_pendidikan_formal = 0;
        $total = 0.0;

        for ($i = 0; $i < count($pendidikanFormal); $i++) {
            if ($pendidikanFormal[$i] >= 3.51) {
                $pendidikanFormal[$i] = 20;
            } else if ($pendidikanFormal[$i] <= 3.50 && $pendidikanFormal[$i] >= 3.01) {
                $pendidikanFormal[$i] = 15;
            } else if ($pendidikanFormal[$i] <= 3.00 && $pendidikanFormal[$i] >= 2.51) {
                $pendidikanFormal[$i] = 10;
            } elseif ($pendidikanFormal[$i] <= 2.50) {
                $pendidikanFormal[$i] = 5;
            }
            $nilai_pendidikan_formal += $pendidikanFormal[$i];
        }


        if ($user->profesiutama === "dosen") {
            $point = "20%";
            $total = $nilai_pendidikan_formal * 0.2;
        } else if ($user->profesiutama === "praktisi") {
            $point = "25%";
            $total = $nilai_pendidikan_formal * 0.25;
        }



        // dd($nilai_pendidikan_formal);

        // dd($total);



        // if($user->profesiutama === "dosen" && )


        // dd($nilai_pendidikan_formal);
        // dd($point);
        // if()

        return view('mahasiswa.rekognisi-pencapaian', [
            "nilai_pendidikan_formal" => $total,
            'point' => $nilai_pendidikan_formal
        ]);
    }


    // public function showBeranda()
    // {

    //     $user = auth()->user()->id;
    //     // dd($user);

    //     return view('.beranda.' . $user);
    // }
}
