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
        $role = auth()->user()->getNameRole();
        $getIdUser = auth()->user()->id;

        if ($role == 'Admin') {
            $surat_masuks = SuratMasuk::orderBy('updated_at', 'desc')->get();
        } else {
            $surat_masuks = SuratMasuk::where('user_id', $getIdUser)->orderBy('updated_at', 'desc')->get();
        }

        return view(strtolower($role).'.suratmasuk.index', [
            'surat_masuks' => $surat_masuks
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

        return view(strtolower($role).'.suratmasuk.create');
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
            'dokumen' => 'required|mimes:pdf,doc',
            'perihal_surat' => 'required',
            'tanggal_input' => 'required',
            'kode_simpan' => 'required',
            'keterangan' => 'required',
        ]);

        $getDokumen = $request->file('dokumen');
        $nameFile = str_replace(['/', ' '], '-', $getDokumen->getClientOriginalName());
        $getDokumen->move(public_path('upload/dokumens'), $nameFile);

        $input['dokumen'] = $nameFile;

        if (auth()->user()->getNameRole() == 'Siswa') {
            $input['user_id'] = auth()->user()->id;
        }

        SuratMasuk::create($input);

        return redirect()->back()->with('success', 'Berhasil membuat surat masuk baru');
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
        $role = auth()->user()->getNameRole();

        return view(strtolower($role).'.suratmasuk.edit', [
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
            $getDokumen->move(public_path('upload/dokumens'), $nameFile);

            $input['dokumen'] = $nameFile;
        }

        if (auth()->user()->getNameRole() == 'Siswa') {
            $input['user_id'] = auth()->user()->id;
        }

        $suratMasuk->update($input);

        return redirect()->back()->with('success', 'Berhasil memperbarui surat masuk');
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
