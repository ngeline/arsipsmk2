<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.suratmasuk.index', [
            'surat_masuks' => SuratMasuk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suratmasuk.create');
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
            'dari' => 'required',
            'alamat' => 'required',
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'dokumen' => 'required',
            'perihal_surat' => 'required',
            'tanggal_input' => 'required',
            'kode_simpan' => 'required',
            'keterangan' => 'required',
        ]);

        $getDokumen = $request->file('dokumen');
        $nameFile = str_replace('/', '-', $getDokumen->getClientOriginalName());
        Storage::putFileAs('public/dokumen', $getDokumen, $nameFile);

        SuratMasuk::create($input);

        return redirect()->back()->with('success', 'Berhasil membuat surat baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(SuratMasuk $suratMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratMasuk $suratMasuk)
    {
        return view('admin.suratmasuk.edit', [
            'surat_masuk' => $suratMasuk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratMasuk $suratMasuk)
    {
        $input = $request->validate([
            'dari' => 'required',
            'alamat' => 'required',
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'dokumen' => 'required',
            'perihal_surat' => 'required',
            'tanggal_input' => 'required',
            'kode_simpan' => 'required',
            'keterangan' => 'required',
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratMasuk $suratMasuk)
    {
        $suratMasuk->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus surat masuk');
    }
}
