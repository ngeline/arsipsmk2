<?php

namespace App\Http\Controllers;

use App\Models\SifatSurat;
use Illuminate\Http\Request;

class SifatSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sifatsurat.index', [
            'sifats_surat' => SifatSurat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sifatsurat.create');
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
            'nama' => 'required'
        ]);

        SifatSurat::create($input);

        return redirect()->back()->with('success', 'Berhasil menambah sifat surat baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $sifatSurat
     * @return \Illuminate\Http\Response
     */
    public function edit(SifatSurat $sifatSurat)
    {
        return view('admin.sifatsurat.edit', [
            'sifat_surat' => $sifatSurat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SifatSurat $sifatSurat)
    {
        $input = $request->validate([
            'nama' => 'required'
        ]);

        $sifatSurat->update($input);

        return redirect()->back()->with('success', 'Berhasil memperbarui sifat surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SifatSurat $sifatSurat)
    {
        $sifatSurat->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus sifat surat');
    }
}
