@extends('layouts.app', ['title' => "Surat Keluar"]);

@section('content')
    @foreach ($surat_keluars as $surat_keluar)
        <tr>
            <td>{{ $surat_keluar->nomor_surat }}</td>
        </tr>
    @endforeach
@endsection
