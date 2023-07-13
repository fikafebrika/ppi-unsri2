<?php

namespace App\Http\Controllers;

use App\Models\PendidikanFormal;
use Illuminate\Http\Request;

class RekognisiPencapaianController extends Controller
{
    //

    public function index()
    {




        // $user = auth()->user();
        // // dd($user);

        // // $pendidikan_formal_user = PendidikanFormal::where('user_id', $id)->get();


        // $pendidikanFormal = PendidikanFormal::where('user_id', $user->id)->pluck('nilai_akademik')->all();

        // // dd($pendidikanFormal->status_validasi);

        // $pendidikanFormalStatus = PendidikanFormal::where('user_id', $user->id)->pluck('status_validasi')->all();

        // // dd($pendidikanFormalStatus[0]);

        // // dd($pendidikanFormal[0]);

        // $nilai_pendidikan_formal = 0;
        // $total = 0.0;

        // for ($i = 0; $i < count($pendidikanFormal); $i++) {
        //     if ($pendidikanFormal[$i] >= 3.51) {
        //         $pendidikanFormal[$i] = 20;
        //     } else if ($pendidikanFormal[$i] <= 3.50 && $pendidikanFormal[$i] >= 3.01) {
        //         $pendidikanFormal[$i] = 15;
        //     } else if ($pendidikanFormal[$i] <= 3.00 && $pendidikanFormal[$i] >= 2.51) {
        //         $pendidikanFormal[$i] = 10;
        //     } elseif ($pendidikanFormal[$i] <= 2.50) {
        //         $pendidikanFormal[$i] = 5;
        //     }
        //     $nilai_pendidikan_formal += $pendidikanFormal[$i];
        // }


        // if ($user->profesiutama === "dosen") {
        //     $point = "20%";
        //     $total = $nilai_pendidikan_formal * 0.2;
        // } else if ($user->profesiutama === "praktisi") {
        //     $point = "25%";
        //     $total = $nilai_pendidikan_formal * 0.25;
        // }



        // dd($nilai_pendidikan_formal);

        // dd($total);

        // dd(auth()->user()->profesiutama);

        // if($user->profesiutama === "dosen" && )

        if (auth()->user()->profesiutama === "dosen") {
            $bobot = array(
                "kode_etik_profesi" => [
                    "organisasi" => "30%",
                    "tanda-penghargaaan" => "10%",
                    "pendidikan" => "15%",
                    "sertifikat" => "15%",
                    "kualifikasi_professional" => "15%",
                    "pengalaman_mengajar" => "15%",
                ],
                "profesionalisme" => [
                    "pendidikan_formal" => "20%",
                    "tanda_penghargaan" => "10%",
                    "pendidikan" => "15%",
                    "sertifikat" => "15%",
                    "kualifikasi_professional" => "15%",
                    "pengalaman_mengajar" => "15%",
                    "bahasa" => "10%"
                ],
                "kesehatan_keselamatan_kerja" => [
                    "kualifikasi_professional" => "100%",
                ],
                "studi_kasus" => [
                    "kualifikasi_professional" => "10%",
                    "pengalaman_mengajar" => "35%",
                    "karya_tulis" => "15%",
                    "makalah" => "15%",
                    "seminar" => "10%",
                    "karya_temuan" => "10%",
                    "bahasa" => "5%",
                ],
                "seminar" => [
                    "kualifikasi_professional" => "5%",
                    "pengalaman_mengajar" => "5%",
                    "karya_tulis" => "30%",
                    "makalah" => "30%",
                    "karya_temuan" => "25%",
                    "bahasa" => "5%",
                ],
                "praktek_keinsinyuran" => [
                    "kualifikasi_professional" => "15%",
                    "karya_tulis" => "20%",
                    "makalah" => "20%",
                    "seminar" => "15%",
                    "karya_temuan" => "20%",
                    "bahasa" => "10%",
                ]
            );
        } else {
            $bobot = array(
                "kode_etik_profesi" => [
                    "organisasi" => "30%",
                    "tanda-penghargaaan" => "10%",
                    "pendidikan" => "15%",
                    "sertifikat" => "15%",
                    "kualifikasi_professional" => "25%",
                    "pengalaman_mengajar" => "5%",
                ],
                "profesionalisme" => [
                    "pendidikan_formal" => "25%",
                    "tanda_penghargaan" => "10%",
                    "pendidikan" => "15%",
                    "sertifikat" => "15%",
                    "kualifikasi_professional" => "25%",
                    "pengalaman_mengajar" => "5%",
                    "bahasa" => "5%"
                ],
                "kesehatan_keselamatan_kerja" => [
                    "kualifikasi_professional" => "100%",
                ],
                "studi_kasus" => [
                    "kualifikasi_professional" => "65%",
                    "pengalaman_mengajar" => "10%",
                    "karya_tulis" => "5%",
                    "makalah" => "5%",
                    "seminar" => "5%",
                    "karya_temuan" => "5%",
                    "bahasa" => "5%",
                ],
                "seminar" => [
                    "kualifikasi_professional" => "65%",
                    "karya_tulis" => "5%",
                    "makalah" => "5%",
                    "seminar" => "15%",
                    "karya_temuan" => "5%",
                    "bahasa" => "5%",
                ],
                "praktek_keinsinyuran" => [
                    "kualifikasi_professional" => "75%",
                    "karya_tulis" => "5%",
                    "makalah" => "5%",
                    "seminar" => "5%",
                    "karya_temuan" => "5%",
                    "bahasa" => "5%",
                ]
            );
        }

        return view('mahasiswa.rekognisi-pencapaian.rekognisi-pencapaian', [
            "bobot" => $bobot
            // "nilai_pendidikan_formal" => $total,
            // 'point' => $nilai_pendidikan_formal
        ]);
    }


    // public function showBeranda()
    // {

    //     $user = auth()->user()->id;
    //     // dd($user);

    //     return view('.beranda.' . $user);
    // }
}
