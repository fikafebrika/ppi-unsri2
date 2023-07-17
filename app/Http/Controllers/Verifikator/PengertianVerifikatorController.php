<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\Pengertian;
use Illuminate\Http\Request;

class PengertianVerifikatorController extends Controller
{
    //
    public function showPengertian($id)
    {
        $list_pengertian_user = Pengertian::where('user_id', $id)->get();

        return view('verifikator.kode-etik-insinyur.pengertian.pengertian', [
            "list_pengertian_user" => $list_pengertian_user,
            "userId" => $id,
        ]);
    }

    public function showDetailPengertian($id)
    {
        $pengertian_user = Pengertian::find($id);

        return view('verifikator.kode-etik-insinyur.pengertian.verifikasi-pengertian', [
            "pengertian_user" => $pengertian_user,
            "userId" => $id,
        ]);
    }


    public function updateDetailPengertian(Request $request, $id)
    {
        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = Pengertian::findOrFail($id);

        $data->update($validated_data);

        return redirect('verifikator/kode-etik-insinyur/pengertian/' . $id);
    }
}
