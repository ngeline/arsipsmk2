<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = auth()->user()->getNameRole();
        $getIdUser = auth()->user()->id;

        if ($role == 'Admin') {
            $surat_keluars = SuratKeluar::all();
        } else {
            $surat_keluars = SuratKeluar::where('user_id', $getIdUser)->get();
        }

        return view(strtolower($role).'.suratkeluar.index', [
            'surat_keluars' => $surat_keluars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = auth()->user()->getNameRole();

        return view(strtolower($role).'.suratkeluar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'kepada' => 'required',
            'alamat' => 'required',
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'dokumen' => 'required|mimes:pdf,doc',
            'perihal_surat' => 'required',
            'tanggal_input' => 'required',
            'kode_simpan' => 'required',
            'keterangan' => 'required',
        ]);

        $getDokumen = $request->file('dokumen');
        $nameFile = str_replace('/', '-', $getDokumen->getClientOriginalName());
        Storage::putFileAs('public/dokumen', $getDokumen, $nameFile);

        $input['dokumen'] = $nameFile;

        if (auth()->user()->getNameRole() == 'Siswa') {
            $input['user_id'] = auth()->user()->id;
        }

        SuratKeluar::create($input);

        return redirect()->back()->with('success', 'Berhasil membuat surat keluar baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeluar $suratKeluar)
    {
        $role = auth()->user()->getNameRole();

        return view(strtolower($role).'.suratkeluar.edit', [
            'surat_keluar' => $suratKeluar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeluar $suratKeluar)
    {
        $input = $request->validate([
            'kepada' => 'required',
            'alamat' => 'required',
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'perihal_surat' => 'required',
            'tanggal_input' => 'required',
            'kode_simpan' => 'required',
            'keterangan' => 'required',
        ]);

        if ($request->hasFile('dokumen')) {
            $request->validate([
                'dokumen' => 'mimes:pdf,doc'
            ]);
            $getDokumen = $request->file('dokumen');
            $nameFile = str_replace('/', '-', $getDokumen->getClientOriginalName());
            Storage::putFileAs('public/dokumen', $getDokumen, $nameFile);

            $input['dokumen'] = $nameFile;
        }

        if (auth()->user()->getNameRole() == 'Siswa') {
            $input['user_id'] = auth()->user()->id;
        }

        $suratKeluar->update($input);

        return redirect()->back()->with('success', 'Berhasil memperbarui surat keluar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeluar $suratKeluar)
    {
        $suratKeluar->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus surat keluar');
    }
}
