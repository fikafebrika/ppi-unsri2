<?php

namespace App\Http\Controllers;

use App\Models\Makalah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MakalahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.publikasi.makalah.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "makalah_users" => Makalah::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.publikasi.makalah.create');
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
            'bukti_makalah' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'bulan_tahun' => 'required|max:255',
            'judul_makalah' => 'required|max:255',
            'nama_makalah' => 'required|max:255',
            'penyelenggara' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'tingkatan_makalah' => 'required',
            'tingkat_kesulitan' => 'required',
            'uraian' => 'required',
        ]);

        if ($request->file('bukti_makalah')) {
            //simpan gambarnya 
            $validatedData['bukti_makalah'] = $request->file('bukti_makalah')->store('bukti-makalah');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Makalah::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/publikasi/makalah')->with('success', 'New makalah has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Makalah  $makalah
     * @return \Illuminate\Http\Response
     */
    public function show(Makalah $makalah)
    {
        //
        return view('mahasiswa.publikasi.makalah.show', [
            'makalah_user' => $makalah
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Makalah  $makalah
     * @return \Illuminate\Http\Response
     */
    public function edit(Makalah $makalah)
    {
        //
        // dd($makalah);
        return view('mahasiswa.publikasi.makalah.edit', [
            'makalah_user' => $makalah
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Makalah  $makalah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Makalah $makalah)
    {

        $rules = [
            'bukti_makalah' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'bulan_tahun' => 'required|max:255',
            'judul_makalah' => 'required|max:255',
            'nama_makalah' => 'required|max:255',
            'penyelenggara' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'tingkatan_makalah' => 'required',
            'tingkat_kesulitan' => 'required',
            'uraian' => 'required',
        ];


        $validatedData = $request->validate($rules);

        // dd($validatedData);

        if ($request->file('bukti_makalah')) {
            //kalau gambar lamanya ada
            if ($request->oldBuktiMakalah) {
                Storage::delete($request->oldBuktiMakalah);
            }
            $validatedData['bukti_makalah'] = $request->file('bukti_makalah')->store('bukti-makalah');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $makalah->update($validatedData);

        return redirect('/publikasi/makalah')->with('success', 'Makalah has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Makalah  $makalah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Makalah $makalah)
    {
        //
        if ($makalah->bukti_makalah) {
            Storage::delete($makalah->bukti_makalah);
        }

        Makalah::destroy($makalah->id);

        return redirect('/publikasi/makalah')->with('success', 'Makalah has been deleted!');
    }
}
