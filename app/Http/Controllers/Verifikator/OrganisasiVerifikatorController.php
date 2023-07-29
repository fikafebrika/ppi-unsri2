<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\Organisasi;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganisasiVerifikatorController extends Controller
{
    //
    public function showOrganisasi($id)
    {
        //

        $list_organisasi_user = Organisasi::where('user_id', $id)->get();
        $verifikator = Auth::guard('verifikator')->user();
        $list_verifikasi = Verifikasi::where('user_id', $verifikator->id)->get();


        return view('verifikator.data-pribadi.organisasi.organisasi', [
            "list_organisasi_user" => $list_organisasi_user,
            "userId" => $id,
            "list_verifikasi" => $list_verifikasi,
        ]);
    }

    public function showDetailOrganisasi($id)
    {
        // dd($id);
        $organisasi_user = Organisasi::find($id);
        // dd($organisasi_user->user_id);

        // dd($pendidikan_formal_user->jenjang);

        return view('verifikator.data-pribadi.organisasi.verifikasi-organisasi', [
            "organisasi_user" => $organisasi_user,
            "userId" => $organisasi_user->user_id,
            // "admin" => Auth::guard('admin')->user()
        ]);
    }


    public function updateDetailOrganisasi(Request $request, $id)
    {
        // dd($request);

        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = Organisasi::findOrFail($id);
        // dd($data->user_id);
        // $data->status_validasi = $request->input('status_validasi');

        $data->update($validated_data);

        return redirect('verifikator/data-pribadi/organisasi/' . $data->user_id);
    }
}
