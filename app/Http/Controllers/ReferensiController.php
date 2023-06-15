<?php

namespace App\Http\Controllers;

use App\Models\Referensi;
use Illuminate\Http\Request;

class ReferensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.kode-etik-insinyur.referensi.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "referensi_users" => Referensi::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.kode-etik-insinyur.referensi.create');
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
            'nama_referensi' => 'required|max:255',
            'alamat_referensi' => 'required',
            'no_telp_referensi' => 'required|max:255',
            'email_referensi' => 'required|max:255',
            'hubungan' => 'required|max:255',
        ]);


        $validatedData['user_id'] = auth()->user()->id;

        Referensi::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/kode-etik-insinyur/referensi')->with('success', 'Referensi has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Referensi  $referensi
     * @return \Illuminate\Http\Response
     */
    public function show(Referensi $referensi)
    {
        //
        return view('mahasiswa.kode-etik-insinyur.referensi.show', [
            'referensi_user' => $referensi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Referensi  $referensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Referensi $referensi)
    {
        //
        return view('mahasiswa.kode-etik-insinyur.referensi.edit', [
            'referensi_user' => $referensi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Referensi  $referensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referensi $referensi)
    {
        //
        $rules = [
            'nama_referensi' => 'required|max:255',
            'alamat_referensi' => 'required',
            'no_telp_referensi' => 'required|max:255',
            'email_referensi' => 'required|max:255',
            'hubungan' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);


        $validatedData['user_id'] = auth()->user()->id;

        $referensi->update($validatedData);

        return redirect('/kode-etik-insinyur/referensi')->with('success', 'Referensi has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Referensi  $referensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referensi $referensi)
    {
        //
        Referensi::destroy($referensi->id);

        return redirect('/kode-etik-insinyur/referensi')->with('success', 'Referensi has been deleted!');
    }
}
