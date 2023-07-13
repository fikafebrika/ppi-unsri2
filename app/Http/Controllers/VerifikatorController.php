<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\PendidikanFormal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        // dd($users);

        return view('verifikator.index', [

            "users" => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function showPendidikanFormal($id)
    {
        //
        // dd(PendidikanFormal::where('user_id', $id)->first());

        // dd(Auth::user());

        $pendidikan_formal_user = PendidikanFormal::where('user_id', $id)->get();

        // $data_verifikator = Admin::where('id', )

        // dd($pendidikan_formal_user);

        return view('verifikator.data-pribadi.pendidikan-formal', [
            "pendidikan_formal" => $pendidikan_formal_user,
            // "admin" => Auth::guard('admin')->user()
        ]);
    }

    public function showDetailPendidikanFormalUser($id)
    {
        $pendidikan_formal_user = PendidikanFormal::find($id);

        // dd($pendidikan_formal_user->jenjang);

        return view('verifikator.data-pribadi.periksa.pendidikan-formal', [
            "pendidikan_formal" => $pendidikan_formal_user,
            // "admin" => Auth::guard('admin')->user()
        ]);
    }


    public function updateDetailPendidikanFormalUser(Request $request, $id)
    {
        // dd($request);

        $rules = [
            'status_validasi' => 'required',
        ];

        // $validated_data = $request->validate($rules);

        $data = PendidikanFormal::findOrFail($id);
        $data->status_validasi = $request->input('status_validasi');

        $data->save();

        return redirect('verifikator/data-pribadi/pendidikan-formal/' . $id);
    }
}
