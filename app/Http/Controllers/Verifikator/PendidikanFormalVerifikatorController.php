<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\PendidikanFormal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PendidikanFormalVerifikatorController extends Controller
{
    //
    public function showPendidikanFormal($id)
    {
        //

        $pendidikan_formal_user = PendidikanFormal::where('user_id', $id)->get();
        // dd($pendidikan_formal_user->user_id);


        return view('verifikator.data-pribadi.pendidikan-formal.pendidikan-formal', [
            "pendidikan_formals" => $pendidikan_formal_user,
            "userId" => $id,
        ]);
    }

    public function showDetailPendidikanFormal($id)
    {
        // dd($id);
        $pendidikan_formal_user = PendidikanFormal::find($id);

        // dd($pendidikan_formal_user->jenjang);

        return view('verifikator.data-pribadi.pendidikan-formal.verifikasi-pendidikan-formal', [
            "pendidikan_formal" => $pendidikan_formal_user,
            "userId" => $id,
        ]);
    }


    public function updateDetailPendidikanFormal(Request $request, $id)
    {
        // dd($request);

        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = PendidikanFormal::findOrFail($id);
        // dd($data);
        // $data->status_validasi = $request->input('status_validasi');

        $data->update($validated_data);

        return redirect('verifikator/data-pribadi/pendidikan-formal/' . $id);
    }
}
