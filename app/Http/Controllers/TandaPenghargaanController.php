<?php

namespace App\Http\Controllers;

use App\Models\TandaPenghargaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TandaPenghargaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.data-pribadi.tanda-penghargaan.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            // "sertifikat_users" => Sertifikat::where('user_id', auth()->user()->id)->get()
            "penghargaan_users" => TandaPenghargaan::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.data-pribadi.tanda-penghargaan.create');
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
            'bukti_penghargaan' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'tahun' => 'required',
            'nama_penghargaan' => 'required|max:255',
            'nama_lembaga_pemberi' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'negara' => 'required|max:255',
            'tingkat_penghargaan' => 'required|max:255',
            'tingkatan_lembaga' => 'required|max:255',
            'uraian' => 'required',
        ]);

        // dd($validatedData);

        if ($request->file('bukti_penghargaan')) {
            //simpan gambarnya 
            $validatedData['bukti_penghargaan'] = $request->file('bukti_penghargaan')->store('bukti_penghargaan');
        }

        $validatedData['user_id'] = auth()->user()->id;

        TandaPenghargaan::create($validatedData);

        return redirect('/data-pribadi/tanda-penghargaan')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TandaPenghargaan  $tandaPenghargaan
     * @return \Illuminate\Http\Response
     */
    public function show(TandaPenghargaan $tandaPenghargaan)
    {
        //
        return view('mahasiswa.data-pribadi.tanda-penghargaan.show', [
            'penghargaan_user' => $tandaPenghargaan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TandaPenghargaan  $tandaPenghargaan
     * @return \Illuminate\Http\Response
     */
    public function edit(TandaPenghargaan $tandaPenghargaan)
    {
        //
        return view('mahasiswa.data-pribadi.tanda-penghargaan.edit', [
            'penghargaan_user' => $tandaPenghargaan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TandaPenghargaan  $tandaPenghargaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TandaPenghargaan $tandaPenghargaan)
    {
        //
        $rules = [
            'bukti_penghargaan' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'tahun' => 'required',
            'nama_penghargaan' => 'required|max:255',
            'nama_lembaga_pemberi' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'negara' => 'required|max:255',
            'tingkat_penghargaan' => 'required|max:255',
            'tingkatan_lembaga' => 'required|max:255',
            'uraian' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('bukti_penghargaan')) {
            //kalau gambar lamanya ada
            if ($request->oldbuktipenghargaan) {
                Storage::delete($request->oldbuktipenghargaan);
            }
            $validatedData['bukti_penghargaan'] = $request->file('bukti_penghargaan')->store('bukti_penghargaan');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $tandaPenghargaan->update($validatedData);

        return redirect('/data-pribadi/tanda-penghargaan')->with('success', 'Tanda penghargaan has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TandaPenghargaan  $tandaPenghargaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TandaPenghargaan $tandaPenghargaan)
    {
        //
        if ($tandaPenghargaan->bukti_penghargaan) {
            Storage::delete($tandaPenghargaan->bukti_penghargaan);
        }

        TandaPenghargaan::destroy($tandaPenghargaan->id);

        return redirect('/data-pribadi/tanda-penghargaan')->with('success', 'Sertifikat has been deleted!');
    }
}
