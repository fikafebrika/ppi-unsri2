<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\Karya;
use Illuminate\Http\Request;

class KaryaTulisVerifikatorController extends Controller
{
    //
    public function showKaryaTulis($id)
    {
        $list_karya_tulis_user = Karya::where('user_id', $id)->get();

        return view('verifikator.publikasi.karya-tulis.karya-tulis', [
            "list_karya_tulis_user" => $list_karya_tulis_user,
            "userId" => $id,
        ]);
    }

    public function showDetailKaryaTulis($id)
    {
        $karya_tulis_user = Karya::find($id);

        return view('verifikator.publikasi.karya-tulis.verifikasi-karya-tulis', [
            "karya_tulis_user" => $karya_tulis_user,
            "userId" => $id,
        ]);
    }


    public function updateDetailKaryaTulis(Request $request, $id)
    {
        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = Karya::findOrFail($id);

        $data->update($validated_data);

        return redirect('verifikator/publikasi/karya-tulis/' . $id);
    }
}
