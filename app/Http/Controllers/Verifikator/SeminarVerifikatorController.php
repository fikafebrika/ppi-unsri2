<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\Seminar;
use Illuminate\Http\Request;

class SeminarVerifikatorController extends Controller
{
    //
    public function showSeminar($id)
    {
        $list_seminar_user = Seminar::where('user_id', $id)->get();

        return view('verifikator.publikasi.seminar.seminar', [
            "list_seminar_user" => $list_seminar_user,
            "userId" => $id,
        ]);
    }

    public function showDetailSeminar($id)
    {
        $seminar_user = Seminar::find($id);

        return view('verifikator.publikasi.seminar.verifikasi-seminar', [
            "seminar_user" => $seminar_user,
            "userId" => $id,
        ]);
    }


    public function updateDetailSeminar(Request $request, $id)
    {
        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = Seminar::findOrFail($id);

        $data->update($validated_data);

        return redirect('verifikator/publikasi/seminar/' . $id);
    }
}
