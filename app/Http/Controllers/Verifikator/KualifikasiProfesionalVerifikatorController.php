<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\KualifikasiProfesional;
use Illuminate\Http\Request;

class KualifikasiProfesionalVerifikatorController extends Controller
{
    //
    public function showKualifikasiProfesional($id)
    {
        $list_kualifikasi_profesional_user = KualifikasiProfesional::where('user_id', $id)->get();

        return view('verifikator.kualifikasi-profesional.kualifikasi-profesional', [
            "list_kualifikasi_profesional_user" => $list_kualifikasi_profesional_user,
            "userId" => $id,
        ]);
    }

    public function showDetailKualifikasiProfesional($id)
    {
        $kualifikasi_profesional_user = KualifikasiProfesional::find($id);

        return view('verifikator.kualifikasi-profesional.verifikasi-kualifikasi-profesional', [
            "kualifikasi_profesional_user" => $kualifikasi_profesional_user,
            "userId" => $id,
        ]);
    }


    public function updateDetailKualifikasiProfesional(Request $request, $id)
    {
        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = KualifikasiProfesional::findOrFail($id);

        $data->update($validated_data);

        return redirect('verifikator/kualifikasi-profesional/' . $id);
    }
}
