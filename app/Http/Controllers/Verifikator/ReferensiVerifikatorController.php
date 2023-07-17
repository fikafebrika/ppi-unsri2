<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\Referensi;
use Illuminate\Http\Request;

class ReferensiVerifikatorController extends Controller
{
    //
    public function showReferensi($id)
    {
        $list_referensi_user = Referensi::where('user_id', $id)->get();

        return view('verifikator.kode-etik-insinyur.referensi.referensi', [
            "list_referensi_user" => $list_referensi_user,
            "userId" => $id,
        ]);
    }

    public function showDetailReferensi($id)
    {
        $referensi_user = Referensi::find($id);

        return view('verifikator.kode-etik-insinyur.referensi.verifikasi-referensi', [
            "referensi_user" => $referensi_user,
            "userId" => $id,
        ]);
    }


    public function updateDetailReferensi(Request $request, $id)
    {
        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = Referensi::findOrFail($id);

        $data->update($validated_data);

        return redirect('verifikator/kode-etik-insinyur/referensi/' . $id);
    }
}
