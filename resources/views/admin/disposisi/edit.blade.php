@extends('layouts.app', ['title' => "Edit Disposisi"])

@section('content')





<div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Edit Surat Masuk</strong><span class="small ms-1"></span></div>
                        <div class="card-body">
                            <div class="example">
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-267">
                                        <form class="row g-3" action=""
                                            enctype="multipart/form-data" method="POST">
                                            @csrf
                                            @method('PUT')
                                            
                                            <div class="col-12">
                                                <label class="form-label" for="dari">Dari <span class="text-danger">*</span></label>
                                                <select name="surat_masuk_id" id="surat_masuk_id">
                                                @foreach ($surat_masuks as $surat_masuk)
                                                    <option value="{{ $surat_masuk->id }}">{{ $surat_masuk->nomor_surat }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="alamat">Alamat <span class="text-danger">*</span></label>
                                                <select name="user_id" id="user_id">
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            {{-- <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="gridCheck" type="checkbox">
                                                    <label class="form-check-label" for="gridCheck">Check me out</label>
                                                </div>
                                            </div> --}}
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
