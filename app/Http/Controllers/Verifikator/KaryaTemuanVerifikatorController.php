<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\KaryaTemuan;
use Illuminate\Http\Request;

class KaryaTemuanVerifikatorController extends Controller
{
    //
    public function showKaryaTemuan($id)
    {
        $list_karya_temuan_user = KaryaTemuan::where('user_id', $id)->get();

        return view('verifikator.publikasi.karya-temuan.karya-temuan', [
            "list_karya_temuan_user" => $list_karya_temuan_user,
            "userId" => $id,
        ]);
    }

    public function showDetailKaryaTemuan($id)
    {
        $karya_temuan_user = KaryaTemuan::find($id);

        return view('verifikator.publikasi.karya-temuan.verifikasi-karya-temuan', [
            "karya_temuan_user" => $karya_temuan_user,
            "userId" => $id,
        ]);
    }


    public function updateDetailKaryaTemuan(Request $request, $id)
    {
        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = KaryaTemuan::findOrFail($id);

        $data->update($validated_data);

        return redirect('verifikator/publikasi/karya-temuan/' . $id);
    }
}
