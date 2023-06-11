<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.data-pribadi.organisasi.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "data_organisasi_user" => Organisasi::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.data-pribadi.organisasi.create');
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
            'bukti_organisasi' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'nama_organisasi' => 'required',
            'jenis_organisasi' => 'required',
            'kota' => 'required|max:255',
            'negara' => 'required|max:255',
            'periode' => 'required|max:255',
            'lama_anggota' => 'required',
            'jabatan' => 'required',
            'tingkatan_organisasi' => 'required',
            'lingkup_organisasi' => 'required',
            'aktifitas' => 'required',
        ]);

        if ($request->file('bukti_organisasi')) {
            //simpan gambarnya 
            $validatedData['bukti_organisasi'] = $request->file('bukti_organisasi')->store('bukti-file-organisasi');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Organisasi::create($validatedData);


        return redirect('/data-pribadi/organisasi')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Organisasi $organisasi)
    {
        //
        return view('mahasiswa.data-pribadi.organisasi.show', [
            'organisasi_user' => $organisasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisasi $organisasi)
    {
        //
        return view('mahasiswa.data-pribadi.organisasi.edit', [
            'organisasi_user' => $organisasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisasi $organisasi)
    {
        //
        // dd($request->file('bukti_organisasi'));

        $rules = [
            'bukti_organisasi' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'nama_organisasi' => 'required',
            'jenis_organisasi' => 'required',
            'kota' => 'required',
            'negara' => 'required',
            'periode' => 'required',
            'lama_anggota' => 'required',
            'jabatan' => 'required',
            'tingkatan_organisasi' => 'required',
            'lingkup_organisasi' => 'required',
            'aktifitas' => 'required',
        ];

        // dd($request->validate($rules));

        $validatedData = $request->validate($rules);

        // $organisasi->nama_organisasi = $request->input('nama_organisasi');

        if ($request->file('bukti_organisasi')) {
            //kalau gambar lamanya ada
            if ($request->oldbuktiorganisasi) {
                Storage::delete($request->oldbuktiorganisasi);
            }
            $validatedData['bukti_organisasi'] = $request->file('bukti_organisasi')->store('bukti-file-organisasi');
        }


        $validatedData['user_id'] = auth()->user()->id;
        $organisasi->update($validatedData);

        // $organisasi->save();

        return redirect('/data-pribadi/organisasi')->with('success', 'Organisasi has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisasi $organisasi)
    {
        //
        if ($organisasi->bukti_organisasi) {
            Storage::delete($organisasi->bukti_organisasi);
        }

        Organisasi::destroy($organisasi->id);

        return redirect('/data-pribadi/organisasi')->with('success', 'Organisasi has been deleted!');
    }
}
