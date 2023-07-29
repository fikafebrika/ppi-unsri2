<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\PengalamanMengajar;
use Illuminate\Http\Request;

class PengalamanMengajarVerifikatorController extends Controller
{
    //
    public function showPengalamanMengajar($id)
    {
        $list_pengalaman_mengajar_user = PengalamanMengajar::where('user_id', $id)->get();



        return view('verifikator.pengalaman-mengajar.pengalaman-mengajar', [
            "list_pengalaman_mengajar_user" => $list_pengalaman_mengajar_user,
            "userId" => $id,
        ]);
    }

    public function showDetailPengalamanMengajar($id)
    {
        $pengalaman_mengajar_user = PengalamanMengajar::find($id);

        return view('verifikator.pengalaman-mengajar.verifikasi-pengalaman-mengajar', [
            "pengalaman_mengajar_user" => $pengalaman_mengajar_user,
            "userId" => $id,
        ]);
    }


    public function updateDetailPengalamanMengajar(Request $request, $id)
    {
        $rules = [
            'status_validasi' => 'required',
            'catatan_verifikator' => 'nullable',
        ];

        $validated_data = $request->validate($rules);

        $data = PengalamanMengajar::findOrFail($id);

        $data->update($validated_data);

        return redirect('verifikator/pengalaman-mengajar/' . $id);
    }
}
