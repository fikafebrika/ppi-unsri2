<?php

namespace App\Http\Controllers;

use App\Models\Bahasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BahasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.bahasa.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "bahasa_users" => Bahasa::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.bahasa.create');
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
            'bukti_bahasa' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'nama_bahasa' => 'required|max:255',
            'jenis_bahasa' => 'required|max:255',
            'kemampuan' => 'required|max:255',
            'jenis_tulisan' => 'required|max:255',
            'nilai' => 'required',
        ]);

        if ($request->file('bukti_bahasa')) {
            //simpan gambarnya 
            $validatedData['bukti_bahasa'] = $request->file('bukti_bahasa')->store('bukti-bahasa');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Bahasa::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/bahasa')->with('success', 'New bahasa has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bahasa  $bahasa
     * @return \Illuminate\Http\Response
     */
    public function show(Bahasa $bahasa)
    {
        //
        return view('mahasiswa.bahasa.show', [
            'bahasa_user' => $bahasa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bahasa  $bahasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Bahasa $bahasa)
    {
        //
        // dd($bahasa);
        return view('mahasiswa.bahasa.edit', [
            'bahasa_user' => $bahasa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bahasa  $bahasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bahasa $bahasa)
    {
        //
        $rules = [
            'bukti_bahasa' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'nama_bahasa' => 'required|max:255',
            'jenis_bahasa' => 'required|max:255',
            'kemampuan' => 'required|max:255',
            'jenis_tulisan' => 'required|max:255',
            'nilai' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('bukti_bahasa')) {
            //kalau gambar lamanya ada
            if ($request->oldBuktiBahasa) {
                Storage::delete($request->oldBuktiBahasa);
            }
            $validatedData['bukti_bahasa'] = $request->file('bukti_bahasa')->store('bukti-bahasa');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $bahasa->update($validatedData);

        return redirect('/bahasa')->with('success', 'Bahasa has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bahasa  $bahasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bahasa $bahasa)
    {
        //
        if ($bahasa->bukti_bahasa) {
            Storage::delete($bahasa->bukti_bahasa);
        }

        Bahasa::destroy($bahasa->id);

        return redirect('/bahasa')->with('success', 'Bahasa has been deleted!');
    }
}
