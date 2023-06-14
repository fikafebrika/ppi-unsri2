<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.data-pribadi.pelatihan.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "pelatihan_users" => Pelatihan::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.data-pribadi.pelatihan.create');
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
            'nama_pendidikan' => 'required|max:255',
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
            $validatedData['bukti_pelatihan'] = $request->file('bukti_pelatihan')->store('bukti-pelatihan');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Pelatihan::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/data-pribadi/pelatihan')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelatihan $pelatihan)
    {
        //
        return view('mahasiswa.data-pribadi.pelatihan.show', [
            'pelatihan_user' => $pelatihan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelatihan $pelatihan)
    {
        //
        return view('mahasiswa.data-pribadi.pelatihan.edit', [
            'pelatihan_user' => $pelatihan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelatihan $pelatihan)
    {
        //
        $rules = [
            'bukti_pelatihan' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'nama_pendidikan' => 'required|max:255',
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
            if ($request->oldbuktipelatihan) {
                Storage::delete($request->oldbuktipelatihan);
            }
            $validatedData['bukti_pelatihan'] = $request->file('bukti_pelatihan')->store('bukti-pelatihan');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $pelatihan->update($validatedData);

        return redirect('/data-pribadi/pelatihan')->with('success', 'Pelatihan has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelatihan $pelatihan)
    {
        //
        if ($pelatihan->bukti_pelatihan) {
            Storage::delete($pelatihan->bukti_pelatihan);
        }

        Pelatihan::destroy($pelatihan->id);

        return redirect('/data-pribadi/pelatihan')->with('success', 'Pelatihan has been deleted!');
    }
}
