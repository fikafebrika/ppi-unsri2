<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\Pelatihan;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelatihanVerifikatorController extends Controller
{
    //
    public function showPelatihan($id)
    {
        //

        $list_pelatihan_user = Pelatihan::where('user_id', $id)->get();

        $verifikator = Auth::guard('verifikator')->user();
        $list_verifikasi = Verifikasi::where('user_id', $verifikator->id)->get();


        return view('verifikator.data-pribadi.pelatihan.pelatihan', [
            "list_pelatihan_user" => $list_pelatihan_user,
            "userId" => $id,
            "list_verifikasi" => $list_verifikasi,
        ]);
    }

    public function showDetailPelatihan($id)
    {
        $pelatihan_user = Pelatihan::find($id);

        return view('verifikator.data-pribadi.pelatihan.verifikasi-pelatihan', [
            "pelatihan_user" => $pelatihan_user,
            "userId" => $pelatihan_user->user_id,
        ]);
    }


    public function updateDetailPelatihan(Request $request, $id)
    {

        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = Pelatihan::findOrFail($id);

        $data->update($validated_data);

        return redirect('verifikator/data-pribadi/pelatihan/' . $data->user_id);
    }
}
