<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\Sertifikat;
use Illuminate\Http\Request;

class SertifikatVerifikatorController extends Controller
{
    //
    public function showSertifikat($id)
    {
        //

        $list_sertifikat_user = Sertifikat::where('user_id', $id)->get();


        return view('verifikator.data-pribadi.sertifikat.sertifikat', [
            "list_sertifikat_user" => $list_sertifikat_user,
            "userId" => $id,
        ]);
    }

    public function showDetailSertifikat($id)
    {
        $sertifikat_user = Sertifikat::find($id);

        return view('verifikator.data-pribadi.sertifikat.verifikasi-sertifikat', [
            "sertifikat_user" => $sertifikat_user,
            "userId" => $sertifikat_user->user_id,
        ]);
    }


    public function updateDetailSertifikat(Request $request, $id)
    {

        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = Sertifikat::findOrFail($id);

        $data->update($validated_data);

        return redirect('verifikator/data-pribadi/sertifikat/' . $data->user_id);
    }
}
