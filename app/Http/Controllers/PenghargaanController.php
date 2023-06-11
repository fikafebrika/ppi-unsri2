<?php

namespace App\Http\Controllers;

use App\Models\Penghargaan;
use Illuminate\Http\Request;

class PenghargaanController extends Controller
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
            "penghargaan_users" => Penghargaan::where('user_id', auth()->user()->id)->get()
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

        // ddd($request);  
        $validatedData = $request->validate([
            'bukti_penghargaan' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'tahun' => 'required',
            'nama_penghargaan' => 'required|max:255',
            'nama_lembaga_pemberi' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'negara' => 'required|max:255',
            'tingkat_penghargaan' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'tingkatan_lembaga' => 'required|max:255',
            'uraian' => 'required',
        ]);

        dd($validatedData);

        if ($request->file('bukti_penghargaan')) {
            //simpan gambarnya 
            $validatedData['bukti_penghargaan'] = $request->file('bukti_penghargaan')->store('bukti_penghargaan');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Penghargaan::create($validatedData);

        return redirect('/data-pribadi/tanda-penghargaan')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penghargaan  $penghargaan
     * @return \Illuminate\Http\Response
     */
    public function show(Penghargaan $penghargaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penghargaan  $penghargaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penghargaan $penghargaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penghargaan  $penghargaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penghargaan $penghargaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penghargaan  $penghargaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penghargaan $penghargaan)
    {
        //
    }
}
