<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\Organisasi;
use Illuminate\Http\Request;

class OrganisasiVerifikatorController extends Controller
{
    //
    public function showOrganisasi($id)
    {
        //

        $list_organisasi_user = Organisasi::where('user_id', $id)->get();


        return view('verifikator.data-pribadi.organisasi.organisasi', [
            "list_organisasi_user" => $list_organisasi_user,
            "userId" => $id,
        ]);
    }
}
