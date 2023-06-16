<?php

namespace App\Http\Controllers;

use App\Models\KualifikasiProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KualifikasiProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.kualifikasi-professional.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "kualifikasi_profesional_users" => KualifikasiProfesional::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.kualifikasi-professional.create');
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
            'bukti_kualifikasi_profesional' => 'mimes:pdf|max:2048',
            'periode' => 'required|max:255',
            'nama_instansi' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'nama_aktifitas' => 'required|max:255',
            'pemberi_tugas' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'durasi' => 'required',
            'posisi' => 'required',
            'nilai_proyek' => 'required',
            'nilai_tanggung_jawab' => 'required|max:255',
            'sdm_terlibat' => 'required',
            'tingkat_kesulitan' => 'required|max:255',
            'skala_proyek' => 'required',
            'uraian' => 'required',
        ]);

        if ($request->file('bukti_kualifikasi_profesional')) {
            //simpan gambarnya 
            $validatedData['bukti_kualifikasi_profesional'] = $request->file('bukti_kualifikasi_profesional')->store('bukti-kualifikasi-professional');
        }

        $validatedData['user_id'] = auth()->user()->id;

        KualifikasiProfesional::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/kualifikasi-profesional')->with('success', 'New Kualifikasi Professional has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KualifikasiProfesional  $kualifikasiProfesional
     * @return \Illuminate\Http\Response
     */
    public function show(KualifikasiProfesional $kualifikasiProfesional)
    {
        //
        return view('mahasiswa.kualifikasi-professional.show', [
            'kualifikasi_professional_user' => $kualifikasiProfesional
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KualifikasiProfesional  $kualifikasiProfesional
     * @return \Illuminate\Http\Response
     */
    public function edit(KualifikasiProfesional $kualifikasiProfesional)
    {
        //
        return view('mahasiswa.kualifikasi-professional.edit', [
            'kualifikasi_professional_user' => $kualifikasiProfesional
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KualifikasiProfesional  $kualifikasiProfesional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KualifikasiProfesional $kualifikasiProfesional)
    {
        //
        $rules = [
            'bukti_kualifikasi_profesional' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'periode' => 'required|max:255',
            'nama_instansi' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'nama_aktifitas' => 'required|max:255',
            'pemberi_tugas' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'durasi' => 'required',
            'posisi' => 'required',
            'nilai_proyek' => 'required',
            'nilai_tanggung_jawab' => 'required|max:255',
            'sdm_terlibat' => 'required',
            'tingkat_kesulitan' => 'required|max:255',
            'skala_proyek' => 'required',
            'uraian' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('bukti_kualifikasi_profesional')) {
            //kalau gambar lamanya ada
            if ($request->oldBuktiKualifikasiProfesional) {
                Storage::delete($request->oldBuktiKualifikasiProfesionall);
            }
            $validatedData['bukti_kualifikasi_profesional'] = $request->file('bukti_kualifikasi_profesional')->store('bukti-kualifikasi-professional');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $kualifikasiProfesional->update($validatedData);

        return redirect('/kualifikasi-profesional')->with('success', 'Kualifikasi Professional has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KualifikasiProfesional  $kualifikasiProfesional
     * @return \Illuminate\Http\Response
     */
    public function destroy(KualifikasiProfesional $kualifikasiProfesional)
    {
        //
        if ($kualifikasiProfesional->bukti_kualifikasi_profesional) {
            Storage::delete($kualifikasiProfesional->bukti_kualifikasi_profesional);
        }

        KualifikasiProfesional::destroy($kualifikasiProfesional->id);

        return redirect('/kualifikasi-profesional')->with('success', 'Kualifikasi Professional has been deleted!');
    }
}
