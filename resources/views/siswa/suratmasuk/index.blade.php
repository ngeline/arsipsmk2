@extends('layouts.app', ['title' => 'Surat Masuk'])

@section('content')
@include('flash-message')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Surat Masuk</strong><span class="small ms-1"></span></div>
                <div class="card-body">
                    <div class="example">
                        <div class="tab-content rounded-bottom">
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-416">
                                <a href="{{ route('surat-masuk.create') }}" class="btn btn-primary btn-l mb-4" role="button">Tambah Data</a>


                                <table id="tabel-data" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Dari</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Nomor Surat</th>
                                            <th scope="col">Tanggal Surat</th>
                                            <th scope="col">Dokumen</th>
                                            <th scope="col">Perihal Surat</th>
                                            <th scope="col">Tanggal Input</th>
                                            <th scope="col">Kode Simpan</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($surat_masuks as $surat_masuk)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $surat_masuk->dari }}</td>
                                                <td>{{ $surat_masuk->alamat }}</td>
                                                <td>{{ $surat_masuk->nomor_surat }}</td>
                                                <td>{{ $surat_masuk->tanggal_surat }}</td>
                                                <td>{{ $surat_masuk->dokumen }}</td>
                                                <td>{{ $surat_masuk->perihal_surat }}</td>
                                                <td>{{ $surat_masuk->tanggal_input }}</td>
                                                <td>{{ $surat_masuk->kode_simpan }}</td>
                                                <td>{{ $surat_masuk->keterangan }}</td>
                                                <td>
                                                    <a href="{{ route('surat-masuk.edit', $surat_masuk->id) }}"
                                                        class="btn btn-warning" role="button">Edit</a>
                                                    <a href="{{ route('surat-masuk.destroy', $surat_masuk->id) }}"
                                                        class="btn btn-danger" role="button">Delete</a>
                                                </td>
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
@push('js')
    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable({
                responsive: true
            });
        });
    </script>
@endpush
