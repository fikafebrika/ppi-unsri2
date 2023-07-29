<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Verifikasi;
use App\Models\Verifikator;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function index()
    {
        $user = User::all();


        // dd($list_verifikasi);


        // dd($list_verifikasi);

        return view("admin.index", [
            "list_user" => $user,
        ]);
    }


    public function create($id)
    {
        $user = User::find($id);
        $list_verifikator = Verifikator::all();
        $list_verifikasi = Verifikasi::where('user_id', $id)->get();
        // dd($list_verifikator);s

        return view('admin.pilih-verifikator.index', [
            'user' => $user,
            'list_verifikator' => $list_verifikator,
            'list_verifikasi' => $list_verifikasi,
            'id' => $id,
        ]);
    }


    public function pilihVerifikator(Request $request, $id)
    {

        $validatedData = $request->validate([
            'verifikator_id' => 'required',
        ]);

        // dd($request);
        $validatedData['user_id'] = $id;

        Verifikasi::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return back();
    }

    public function destroy($user_id, $verifikator_id)
    {

        // dd($user_id);
        Verifikasi::where('verifikator_id', $verifikator_id)
            ->where('user_id', $user_id)
            ->delete();

        return back();
    }
}
