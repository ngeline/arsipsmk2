@extends('layouts.app', ['title' => 'Disposisi'])

@section('content')
    @foreach ($disposisis as $disposisi)
        <tr>
            <td>{{ $disposisi->suratMasuk->nomor_surat }}</td>
            <td>{{ $disposisi->user->name }}</td>
            <td>{{ $disposisi->catatan }}</td>
        </tr>
    @endforeach
@endsection
