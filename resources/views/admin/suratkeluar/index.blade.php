@extends('layouts.app', ['title' => "Surat Keluar"]);

@section('content')
    @foreach ($surat_keluars as $surat_keluar)
        <tr>
            <td>{{ $surat_keluar->nomor_surat }}</td>
        </tr>
    @endforeach


    <div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="car"></div>
        <div class="card mb-4">
            <div class="card-header"><strong>Surat Masuk</strong><span class="small ms-1"></span></div>
            <div class="card-body">
                <div class="example">
                    <div class="tab-content rounded-bottom">
                        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-416">
                        <a href="{{ route('surat-keluar.create') }}" class="btn btn-primary btn-l" role="button">Tambah Data</a>


                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kepada</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Nomor Surat</th>
                                        <th scope="col">Tanggal Surat</th>
                                        <th scope="col">Jumlah Lampiran</th>
                                        <th scope="col">File Surat</th>
                                        <th scope="col">Perihal Surat</th>
                                        <th scope="col">Tanggal Input</th>
                                        <th scope="col">Kode Simpan</th>
                                        <th scope="col">Isi Ringkasan</th>
                                        <th scope="col">Tanggal Rapat</th>
                                        <th scope="col">Waktu Rapat</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Aksi</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($surat_keluars as $surat_keluar)
                                    <tr>
                                        <td>{{ $surat_keluar->kepada }}</td>
                                        <td>{{ $surat_keluar->alamat }}</td>
                                        <td>{{ $surat_keluar->nomor_surat }}</td>
                                        <td>{{ $surat_keluar->tanggal_surat }}</td>
                                        <td>{{ $surat_keluar->jumlah_lampiran }}</td>
                                        <td>{{ $surat_keluar->file_surat }}</td>
                                        <td>{{ $surat_keluar->perihal }}</td>
                                        <td>{{ $surat_keluar->tanggal_input }}</td>
                                        <td>{{ $surat_keluar->kode_simpan }}</td>
                                        <td>{{ $surat_keluar->isi_ringkasan }}</td>
                                        <td>{{ $surat_keluar->tanggal_rapat }}</td>
                                        <td>{{ $surat_keluar->waktu_rapat }}</td>
                                        <td>{{ $surat_keluar->lokasi }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
