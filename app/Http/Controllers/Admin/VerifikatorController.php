<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Verifikator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VerifikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.verifikator.index", [
            "verifikators" => Verifikator::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'nomor_induk_pegawai' => 'required|unique:verifikators|max:255',
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($request->password);
        Verifikator::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/admin/verifikator')->with('success', 'New verifikator has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Verifikator $verifikator)
    {
        // return view('admin.verifikator.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Verifikator $verifikator)
    {
        return view('admin.verifikator.edit', [
            "verifikator" => $verifikator
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Verifikator $verifikator)
    {
        $rules = [
            'nama_lengkap' => 'required|max:255',
            'nomor_induk_pegawai' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'required',
        ];

        $validatedData = $request->validate($rules);


        $verifikator->update($validatedData);

        return redirect('/admin/verifikator')->with('success', 'verifikator has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verifikator $verifikator)
    {
        Verifikator::destroy($verifikator->id);

        return redirect('/admin/verifikator')->with('success', 'verifikator has been deleted!');
    }
}
