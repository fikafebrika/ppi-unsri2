<?php

namespace App\Http\Controllers;

use App\Models\PengalamanMengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengalamanMengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("mahasiswa.pengalaman-mengajar.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "pengalaman_mengajar_users" => PengalamanMengajar::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.pengalaman-mengajar.create');
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
            'bukti_pengalaman_mengajar' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'nama_perguruan_tinggi' => 'required|max:255',
            'nama_mata_ajaran' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'periode' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'sks' => 'required',
            'uraian' => 'required',
        ]);

        if ($request->file('bukti_pengalaman_mengajar')) {
            //simpan gambarnya 
            $validatedData['bukti_pengalaman_mengajar'] = $request->file('bukti_pengalaman_mengajar')->store('bukti-pengalaman-mengajar');
        }

        $validatedData['user_id'] = auth()->user()->id;

        PengalamanMengajar::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/pengalaman-mengajar')->with('success', 'New pengalaman mengajar has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengalamanMengajar  $pengalamanMengajar
     * @return \Illuminate\Http\Response
     */
    public function show(PengalamanMengajar $pengalamanMengajar)
    {
        //
        return view('mahasiswa.pengalaman-mengajar.show', [
            'pengalaman_mengajar_user' => $pengalamanMengajar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengalamanMengajar  $pengalamanMengajar
     * @return \Illuminate\Http\Response
     */
    public function edit(PengalamanMengajar $pengalamanMengajar)
    {
        //
        return view('mahasiswa.pengalaman-mengajar.edit', [
            'pengalaman_mengajar_user' => $pengalamanMengajar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengalamanMengajar  $pengalamanMengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengalamanMengajar $pengalamanMengajar)
    {
        //
        $rules = [
            'bukti_pengalaman_mengajar' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'nama_perguruan_tinggi' => 'required|max:255',
            'nama_mata_ajaran' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'periode' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'sks' => 'required',
            'uraian' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('bukti_pengalaman_mengajar')) {
            //kalau gambar lamanya ada
            if ($request->oldBuktiPengalamanMengajar) {
                Storage::delete($request->oldBuktiPengalamanMengajar);
            }
            $validatedData['bukti_pengalaman_mengajar'] = $request->file('bukti_pengalaman_mengajar')->store('bukti-pengalaman-mengajar');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $pengalamanMengajar->update($validatedData);

        return redirect('/pengalaman-mengajar')->with('success', 'Pengalaman mengajar has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengalamanMengajar  $pengalamanMengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengalamanMengajar $pengalamanMengajar)
    {
        //
        if ($pengalamanMengajar->bukti_pengalaman_mengajar) {
            Storage::delete($pengalamanMengajar->bukti_pengalaman_mengajar);
        }

        PengalamanMengajar::destroy($pengalamanMengajar->id);

        return redirect('/pengalaman-mengajar')->with('success', 'Pengalaman mengajar has been deleted!');
    }
}
