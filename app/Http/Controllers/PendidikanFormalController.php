<?php

namespace App\Http\Controllers;

use App\Models\PendidikanFormal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PendidikanFormalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("mahasiswa.data-pribadi.pendidikan_formal.index", [
            //cari post yang user_idnya sama dengan id user yang sedang login
            "pendidikan_formal_users" => PendidikanFormal::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.data-pribadi.pendidikan_formal.create');
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
            'bukti' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'jenjang' => 'required',
            'nama_perguruan_tinggi' => 'required|max:255',
            'fakultas' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'kota' => 'required|max:255',
            'negara' => 'required|max:255',
            'tahun_lulus' => 'required|max:255',
            'gelar' => 'required|max:255',
            'judul' => 'required',
            'uraian_singkat' => 'required',
            'nilai_akademik' => 'required',
            'judicium' => 'required',
        ]);

        if ($request->file('bukti')) {
            //simpan gambarnya 
            $validatedData['bukti'] = $request->file('bukti')->store('bukti-file');
        }

        $validatedData['user_id'] = auth()->user()->id;

        PendidikanFormal::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/data-pribadi/pendidikan_formal')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PendidikanFormal  $pendidikanFormal
     * @return \Illuminate\Http\Response
     */
    public function show(PendidikanFormal $pendidikanFormal)
    {
        //

        return view('mahasiswa.data-pribadi.pendidikan_formal.show', [
            'pendidikan_formal_user' => $pendidikanFormal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PendidikanFormal  $pendidikanFormal
     * @return \Illuminate\Http\Response
     */
    public function edit(PendidikanFormal $pendidikanFormal)
    {
        //
        return view('mahasiswa.data-pribadi.pendidikan_formal.edit', [
            'pendidikan_formal_user' => $pendidikanFormal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PendidikanFormal  $pendidikanFormal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PendidikanFormal $pendidikanFormal)
    {
        //
        $rules = [
            'bukti' => 'mimes:pdf|max:2048', // Hanya menerima file dengan ekstensi .pdf dan ukuran maksimum 2MB
            'jenjang' => 'required',
            'nama_perguruan_tinggi' => 'required|max:255',
            'fakultas' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'kota' => 'required|max:255',
            'negara' => 'required|max:255',
            'tahun_lulus' => 'required|max:255',
            'gelar' => 'required|max:255',
            'judul' => 'required',
            'uraian_singkat' => 'required',
            'nilai_akademik' => 'required',
            'judicium' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('bukti')) {
            //kalau gambar lamanya ada
            if ($request->oldbukti) {
                Storage::delete($request->oldbukti);
            }
            $validatedData['bukti'] = $request->file('bukti')->store('bukti-file');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $pendidikanFormal->update($validatedData);

        return redirect('/data-pribadi/pendidikan_formal')->with('success', 'Pendidikan Formal has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PendidikanFormal  $pendidikanFormal
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendidikanFormal $pendidikanFormal)
    {
        //
        if ($pendidikanFormal->bukti) {
            Storage::delete($pendidikanFormal->bukti);
        }

        PendidikanFormal::destroy($pendidikanFormal->id);

        return redirect('/data-pribadi/pendidikan_formal')->with('success', 'Post has been deleted!');
    }
}
