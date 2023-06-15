<?php

namespace App\Http\Controllers;

use App\Models\Pengertian;
use Illuminate\Http\Request;

class PengertianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.kode-etik-insinyur.pengertian.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "pengertian_users" => Pengertian::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.kode-etik-insinyur.pengertian.create');
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
            'pengertian' => 'required',
        ]);


        $validatedData['user_id'] = auth()->user()->id;

        Pengertian::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/kode-etik-insinyur/pengertian')->with('success', 'Pengertian has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengertian  $pengertian
     * @return \Illuminate\Http\Response
     */
    public function show(Pengertian $pengertian)
    {
        //
        return view('mahasiswa.kode-etik-insinyur.pengertian.show', [
            'pengertian_user' => $pengertian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengertian  $pengertian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengertian $pengertian)
    {
        //
        return view('mahasiswa.kode-etik-insinyur.pengertian.edit', [
            'pengertian_user' => $pengertian
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengertian  $pengertian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengertian $pengertian)
    {
        //
        $rules = [
            'pengertian' => 'required',
        ];

        $validatedData = $request->validate($rules);


        $validatedData['user_id'] = auth()->user()->id;

        $pengertian->update($validatedData);

        return redirect('/kode-etik-insinyur/pengertian')->with('success', 'Pengertian has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengertian  $pengertian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengertian $pengertian)
    {
        //
        Pengertian::destroy($pengertian->id);

        return redirect('/kode-etik-insinyur/pengertian')->with('success', 'Pengertian has been deleted!');
    }
}
