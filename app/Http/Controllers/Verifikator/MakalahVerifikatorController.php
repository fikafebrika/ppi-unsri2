<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\Makalah;
use Illuminate\Http\Request;

class MakalahVerifikatorController extends Controller
{
    //
    public function showMakalah($id)
    {
        $list_makalah_user = Makalah::where('user_id', $id)->get();

        return view('verifikator.publikasi.makalah.makalah', [
            "list_makalah_user" => $list_makalah_user,
            "userId" => $id,
        ]);
    }

    public function showDetailMakalah($id)
    {
        $makalah_user = Makalah::find($id);

        return view('verifikator.publikasi.makalah.verifikasi-makalah', [
            "makalah_user" => $makalah_user,
            "userId" => $id,
        ]);
    }


    public function updateDetailMakalah(Request $request, $id)
    {
        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = Makalah::findOrFail($id);

        $data->update($validated_data);

        return redirect('verifikator/publikasi/makalah/' . $id);
    }
}
