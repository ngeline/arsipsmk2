<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use App\Models\SuratMasuk;
use App\Models\User;
use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.disposisi.index', [
            'disposisis' => Disposisi::with(['surat_masuk', 'user'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.disposisi.create', [
            'surat_masuks' => SuratMasuk::all(),
            'user' => User::all()
        ]);
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
            'surat_masuk_id' => 'required',
            'sifat_surat' => 'required',
            'catatan' => 'required',
            'user_id' => 'required'
        ]);

        Disposisi::create($input);

        return redirect()->back()->with('success', 'Berhasil menambah disposisi baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function show(Disposisi $disposisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Disposisi $disposisi)
    {
        return view('admin.disposisi.edit', [
            'surat_masuks' => SuratMasuk::all(),
            'users' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disposisi $disposisi)
    {
        $input = $request->validate([
            'surat_masuk_id' => 'required',
            'sifat_surat' => 'required',
            'catatan' => 'required',
            'user_id' => 'required'
        ]);

        $disposisi->update($input);

        return redirect()->back()->with('success', 'Berhasil memperbarui disposisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disposisi $disposisi)
    {
        $disposisi->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus disposisi');
    }
}
