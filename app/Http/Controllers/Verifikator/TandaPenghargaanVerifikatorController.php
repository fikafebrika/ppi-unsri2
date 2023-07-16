<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\TandaPenghargaan;
use Illuminate\Http\Request;

class TandaPenghargaanVerifikatorController extends Controller
{
    //
    public function showTandaPenghargaan($id)
    {
        //

        $list_tanda_penghargaan_user = TandaPenghargaan::where('user_id', $id)->get();


        return view('verifikator.data-pribadi.tanda-penghargaan.tanda-penghargaan', [
            "list_tanda_penghargaan_user" => $list_tanda_penghargaan_user,
            "userId" => $id,
        ]);
    }

    public function showDetailTandaPenghargaan($id)
    {
        $tanda_penghargaan_user = TandaPenghargaan::find($id);

        return view('verifikator.data-pribadi.tanda-penghargaan.verifikasi-tanda-penghargaan', [
            "penghargaan_user" => $tanda_penghargaan_user,
            "userId" => $tanda_penghargaan_user->user_id,
        ]);
    }


    public function updateDetailTandaPenghargaan(Request $request, $id)
    {
        // dd($request);

        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = TandaPenghargaan::findOrFail($id);
        // dd($data->user_id);
        // $data->status_validasi = $request->input('status_validasi');

        $data->update($validated_data);

        return redirect('verifikator/data-pribadi/tanda-penghargaan/' . $data->user_id);
    }
}
