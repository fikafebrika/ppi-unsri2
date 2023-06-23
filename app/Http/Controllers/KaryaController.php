<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.publikasi.karya-tulis.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "karya_tulis_users" => Karya::where('user_id', auth()->user()->id)->get()
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
        return view('mahasiswa.publikasi.karya-tulis.create');
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
            'bukti_karya_tulis' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'bulan_tahun' => 'required|max:255',
            'judul_karya_tulis' => 'required|max:255',
            'nama_media' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'tingkatan_media' => 'required|max:255',
            'tingkat_kesulitan' => 'required',
            'uraian' => 'required',
        ]);

        if ($request->file('bukti_karya_tulis')) {
            //simpan gambarnya 
            $validatedData['bukti_karya_tulis'] = $request->file('bukti_karya_tulis')->store('bukti-karya-tulis');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Karya::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/publikasi/karya')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function show(Karya $karya)
    {
        //
        return view('mahasiswa.publikasi.karya-tulis.show', [
            'karya_tulis_user' => $karya
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function edit(Karya $karya)
    {
        //
        return view('mahasiswa.publikasi.karya-tulis.edit', [
            'karya_tulis_user' => $karya
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karya $karya)
    {
        //
        $rules = [
            'bukti_karya_tulis' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'bulan_tahun' => 'required|max:255',
            'judul_karya_tulis' => 'required|max:255',
            'nama_media' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'tingkatan_media' => 'required|max:255',
            'tingkat_kesulitan' => 'required',
            'uraian' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('bukti_karya_tulis')) {
            //kalau gambar lamanya ada
            if ($request->oldBuktiKaryaTulis) {
                Storage::delete($request->oldBuktiKaryaTulis);
            }
            $validatedData['bukti_karya_tulis'] = $request->file('bukti_karya_tulis')->store('bukti-karya-tulis');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $karya->update($validatedData);

        return redirect('/publikasi/karya')->with('success', 'Karya tulis has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karya $karya)
    {
        //
        if ($karya->bukti_karya_tulis) {
            Storage::delete($karya->bukti_karya_tulis);
        }

        Karya::destroy($karya->id);

        return redirect('/publikasi/karya')->with('success', 'Karya tulis has been deleted!');
    }
}
