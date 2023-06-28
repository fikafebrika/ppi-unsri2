<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.publikasi.seminar.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "serminar_users" => Seminar::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.publikasi.seminar.create');
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
            'bukti_seminar' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'bulan_tahun' => 'required|max:255',
            'nama_seminar' => 'required|max:255',
            'nama_penyelenggara' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'tingkatan_seminar' => 'required|max:255',
            'tingkat_kesulitan' => 'required',
            'uraian' => 'required',
        ]);

        if ($request->file('bukti_seminar')) {
            //simpan gambarnya 
            $validatedData['bukti_seminar'] = $request->file('bukti_seminar')->store('bukti-seminar');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Seminar::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/publikasi/seminar')->with('success', 'New seminar has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function show(Seminar $seminar)
    {
        //
        return view('mahasiswa.publikasi.seminar.show', [
            'seminar_user' => $seminar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function edit(Seminar $seminar)
    {
        //
        // dd($seminar);
        return view('mahasiswa.publikasi.seminar.edit', [
            'seminar_user' => $seminar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seminar $seminar)
    {
        //
        $rules = [
            'bukti_seminar' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'bulan_tahun' => 'required|max:255',
            'nama_seminar' => 'required|max:255',
            'nama_penyelenggara' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'tingkatan_seminar' => 'required|max:255',
            'tingkat_kesulitan' => 'required',
            'uraian' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('bukti_seminar')) {
            //kalau gambar lamanya ada
            if ($request->oldBuktiSeminar) {
                Storage::delete($request->oldBuktiSeminar);
            }
            $validatedData['bukti_seminar'] = $request->file('bukti_seminar')->store('bukti-seminar');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $seminar->update($validatedData);

        return redirect('/publikasi/seminar')->with('success', 'Seminar has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seminar $seminar)
    {
        //
        if ($seminar->bukti_seminar) {
            Storage::delete($seminar->bukti_seminar);
        }

        Seminar::destroy($seminar->id);

        return redirect('/publikasi/seminar')->with('success', 'Seminar has been deleted!');
    }
}
