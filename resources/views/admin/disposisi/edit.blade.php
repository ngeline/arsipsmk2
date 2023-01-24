@extends('layouts.app', ['title' => "Edit Disposisi"])

@section('content')
<select name="surat_masuk_id" id="surat_masuk_id">
    @foreach ($surat_masuks as $surat_masuk)
        <option value="{{ $surat_masuk->id }}">{{ $surat_masuk->nomor_surat }}</option>
    @endforeach
</select>

<select name="user_id" id="user_id">
    @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
    @endforeach
</select>
@endsection
