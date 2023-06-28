<?php

namespace App\Http\Controllers;

use App\Models\KaryaTemuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaryaTemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.publikasi.karya-temuan.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "karya_temuan_users" => KaryaTemuan::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.publikasi.karya-temuan.create');
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
            'bukti_karya_temuan' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'bulan_tahun' => 'required|max:255',
            'judul_karya_temuan' => 'required|max:255',
            'uraian' => 'required',
            'nama_media' => 'required|max:255',
            'tingkatan_media' => 'required|max:255',
            'tingkat_kesulitan' => 'required',
        ]);

        if ($request->file('bukti_karya_temuan')) {
            //simpan gambarnya 
            $validatedData['bukti_karya_temuan'] = $request->file('bukti_karya_temuan')->store('bukti-karya-temuan');
        }

        $validatedData['user_id'] = auth()->user()->id;

        KaryaTemuan::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/publikasi/karya-temuan')->with('success', 'New karya temuan has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KaryaTemuan  $karyaTemuan
     * @return \Illuminate\Http\Response
     */
    public function show(KaryaTemuan $karyaTemuan)
    {
        //
        return view('mahasiswa.publikasi.karya-temuan.show', [
            'karya_temuan_user' => $karyaTemuan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KaryaTemuan  $karyaTemuan
     * @return \Illuminate\Http\Response
     */
    public function edit(KaryaTemuan $karyaTemuan)
    {
        //
        // dd($karyaTemuan);
        return view('mahasiswa.publikasi.karya-temuan.edit', [
            'karya_temuan_user' => $karyaTemuan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KaryaTemuan  $karyaTemuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KaryaTemuan $karyaTemuan)
    {
        //
        $rules = [
            'bukti_karya_temuan' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'bulan_tahun' => 'required|max:255',
            'judul_karya_temuan' => 'required|max:255',
            'uraian' => 'required',
            'nama_media' => 'required|max:255',
            'tingkatan_media' => 'required|max:255',
            'tingkat_kesulitan' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('bukti_karya_temuan')) {
            //kalau gambar lamanya ada
            if ($request->oldBuktiKaryaTemuan) {
                Storage::delete($request->oldBuktiKaryaTemuan);
            }
            $validatedData['bukti_karya_temuan'] = $request->file('bukti_karya_temuan')->store('bukti-karya-temuan');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $karyaTemuan->update($validatedData);

        return redirect('/publikasi/karya-temuan')->with('success', 'Karya temuan has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KaryaTemuan  $karyaTemuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KaryaTemuan $karyaTemuan)
    {
        //
        if ($karyaTemuan->bukti_karya_temuan) {
            Storage::delete($karyaTemuan->bukti_karya_temuan);
        }

        KaryaTemuan::destroy($karyaTemuan->id);

        return redirect('/publikasi/karya-temuan')->with('success', 'Karya temuan has been deleted!');
    }
}
