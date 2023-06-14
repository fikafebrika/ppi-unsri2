<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.data-pribadi.sertifikat.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "sertifikat_users" => Sertifikat::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.data-pribadi.sertifikat.create');
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
            'bukti_pelatihan' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'nama_pelatihan' => 'required|max:255',
            'penyelenggara' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'negara' => 'required|max:255',
            'bulan_tahun' => 'required|max:255',
            'tingkat_materi' => 'required',
            'jumlah_jam' => 'required',
            'uraian' => 'required',
        ]);

        if ($request->file('bukti_pelatihan')) {
            //simpan gambarnya 
            $validatedData['bukti_pelatihan'] = $request->file('bukti_pelatihan')->store('bukti-sertifikat');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Sertifikat::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/data-pribadi/pelatihan')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function show(Sertifikat $sertifikat)
    {
        //
        return view('mahasiswa.data-pribadi.sertifikat.show', [
            'sertifikat_user' => $sertifikat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function edit(Sertifikat $sertifikat)
    {
        //
        return view('mahasiswa.data-pribadi.sertifikat.edit', [
            'sertifikat_user' => $sertifikat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        //
        $rules = [
            'bukti_pelatihan' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'nama_pelatihan' => 'required|max:255',
            'penyelenggara' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'negara' => 'required|max:255',
            'bulan_tahun' => 'required|max:255',
            'tingkat_materi' => 'required',
            'jumlah_jam' => 'required',
            'uraian' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('bukti_pelatihan')) {
            //kalau gambar lamanya ada
            if ($request->oldbuktisertifikat) {
                Storage::delete($request->oldbuktisertifikat);
            }
            $validatedData['bukti_pelatihan'] = $request->file('bukti_pelatihan')->store('bukti-sertifikat');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $sertifikat->update($validatedData);

        return redirect('/data-pribadi/sertifikat')->with('success', 'Sertifikat has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertifikat $sertifikat)
    {
        //
        if ($sertifikat->bukti_pelatihan) {
            Storage::delete($sertifikat->bukti_pelatihan);
        }

        Sertifikat::destroy($sertifikat->id);

        return redirect('/data-pribadi/pelatihan')->with('success', 'Sertifikat has been deleted!');
    }
}
