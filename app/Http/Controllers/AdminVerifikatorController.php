<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminVerifikatorController extends Controller
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
            //cari post yang user_idnya sama dengan id user yang sedang login
            // "sertifikat_users" => Sertifikat::where('user_id', auth()->user()->id)->get()
            "verifikators" => Admin::all()
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

        Admin::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/admin/verifikator')->with('success', 'New verifikator has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
        return view('admin.verifikator.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
        return view('admin.verifikator.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
        $rules = [
            'nama_lengkap' => 'required|max:255',
            'nomor_induk_pegawai' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'required',
        ];

        $validatedData = $request->validate($rules);


        $admin->update($validatedData);

        return redirect('/admin/verifikator')->with('success', 'verifikator has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
        dd($admin);
        Admin::destroy($admin->id);

        return redirect('/admin/verifikator')->with('success', 'verifikator has been deleted!');
    }
}
