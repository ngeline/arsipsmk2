<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use App\Models\DisposisiKeluar;
use App\Models\SuratMasuk;
use App\Models\SifatSurat;
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
        $role = auth()->user()->getNameRole();
        $getIdUser = auth()->user()->id;

        $data = [
            'surat_masuks' => SuratMasuk::all(),
            'sifat_surats' => SifatSurat::all(),
            'users' => User::all()
        ];

        if ($role == 'Admin') {
            $disposisis = Disposisi::with('user', 'suratMasuk', 'sifatSurat')->get();
            $data['disposisis'] = $disposisis;
        } else {
            $disposisiMasuks = Disposisi::with('suratMasuk', 'sifatSurat', 'user')->where('kepada', auth()->user()->name)->orderBy('updated_at', 'desc')->get();
            $disposisiKeluars = Disposisi::with('suratMasuk', 'sifatSurat', 'user')->where('user_id', $getIdUser)->orderBy('updated_at', 'desc')->get();
            $data['disposisiMasuks'] = $disposisiMasuks;
            $data['disposisiKeluars'] = $disposisiKeluars;
        }

        return view(strtolower($role).'.disposisi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'sifat_surat_id' => 'required',
            'catatan' => 'required',
            'kepada' => 'required'
        ]);

        $input['user_id'] = auth()->user()->id;
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
            'sifat_surat_id' => 'required',
            'catatan' => 'required',
            'kepada' => 'required'
        ]);

        // $input['user_id'] = auth()->user()->name;

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
