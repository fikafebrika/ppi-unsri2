<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\Bahasa;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BahasaVerifikatorController extends Controller
{
    //
    public function showBahasa($id)
    {
        $list_bahasa_user = Bahasa::where('user_id', $id)->get();

        $verifikator = Auth::guard('verifikator')->user();
        $list_verifikasi = Verifikasi::where('user_id', $verifikator->id)->get();

        return view('verifikator.bahasa.bahasa', [
            "list_bahasa_user" => $list_bahasa_user,
            "userId" => $id,
            "list_verifikasi" => $list_verifikasi,
        ]);
    }

    public function showDetailBahasa($id)
    {
        $bahasa_user = Bahasa::find($id);

        return view('verifikator.bahasa.verifikasi-bahasa', [
            "bahasa_user" => $bahasa_user,
            "userId" => $id,
        ]);
    }


    public function updateDetailBahasa(Request $request, $id)
    {
        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = Bahasa::findOrFail($id);

        $data->update($validated_data);

        return redirect('verifikator/bahasa/' . $id);
    }
}
