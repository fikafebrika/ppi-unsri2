<?php

namespace App\Http\Controllers;

use App\Models\UserAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VerifikatorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("admin.verifikator.index", [
            "verifikators" => UserAdmin::all()
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
        return view('admin.verifikator.create');
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
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'nomor_induk_pegawai' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($request->password);
        UserAdmin::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/admin/verifikator')->with('success', 'New verifikator has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(UserAdmin $userAdmin)
    {
        //
        return view('admin.verifikator.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAdmin $userAdmin)
    {
        //
        return view('admin.verifikator.edit', [
            "verifikator" => $userAdmin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAdmin $userAdmin)
    {
        //
        $rules = [
            'nama_lengkap' => 'required|max:255',
            'nomor_induk_pegawai' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'required',
        ];

        $validatedData = $request->validate($rules);


        $userAdmin->update($validatedData);

        return redirect('/admin/verifikator')->with('success', 'verifikator has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAdmin $userAdmin)
    {
        //
        // dd($userAdmin);
        UserAdmin::destroy($userAdmin->id);

        return redirect('/admin/verifikator')->with('success', 'verifikator has been deleted!');
    }
}
