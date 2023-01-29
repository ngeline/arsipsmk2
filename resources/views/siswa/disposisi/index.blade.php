@extends('layouts.app', ['title' => 'Disposisi'])

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Disposisi</strong><span class="small ms-1"></span></div>
                <div class="card-body">
                    <div class="example">
                        <div class="tab-content rounded-bottom">
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-416">
                                <!-- <a href="{{ route('disposisi.create') }}" class="btn btn-primary btn-l" role="button">Tambah Data</a> -->
                                <!-- Button trigger modal -->
                                <button type="button" id="buttonexampleModal" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Tambah Data
                                </button>
                                <table id="tabel-data" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nomor Surat</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Catatan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($disposisis as $disposisi)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $disposisi->suratMasuk->nomor_surat }}</td>
                                                <td>{{ $disposisi->user->name }}</td>
                                                <td>{{ $disposisi->catatan }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" onclick="editModal({{ $disposisi->id }})">
                                                        Edit
                                                    </button>
                                                    @include('admin.disposisi.modal')
                                                    <a href="{{ route('disposisi.destroy', $disposisi->id) }}"
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

    <!-- Modal Create -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Disposisi</h5>
                </div>
                <form method="POST" action="{{ route('disposisi.store') }}">

                    @csrf
                    <div class="modal-body">

                        <div class="form-group row mb-3">
                            <label for="name"
                                class="col-md-3 col-form-label text-md-right">{{ __('Nomor Surat') }}</label>

                            <div class="col-md-8">
                                <select class="form-control" name="surat_masuk_id" id="surat_masuk_id">
                                    <option value=""> Pilih Nomor Surat </option>
                                    @foreach ($surat_masuks as $surat_masuk)
                                        <option value="{{ $surat_masuk->id }}">{{ $surat_masuk->nomor_surat }}</option>
                                    @endforeach
                                </select>

                                @error('surat_masuk_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="sifat_surat_id"
                                class="col-md-3 col-form-label text-md-right">{{ __('Sifat Surat') }}</label>

                            <div class="col-md-8">
                                <select class="form-control" name="sifat_surat_id" id="sifat_surat_id">
                                    <option value=""> Pilih Sifat Surat </option>
                                    @foreach ($sifat_surats as $sifat_surat)
                                        <option value="{{ $sifat_surat->id }}">{{ $sifat_surat->nama }}</option>
                                    @endforeach
                                </select>

                                @error('sifat_surat_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="catatan" class="col-md-3 col-form-label text-md-right">{{ __('Catatan') }}</label>

                            <div class="col-md-8">
                                <input id="catatan" type="text"
                                    class="form-control @error('catatan') is-invalid @enderror" name="catatan" required
                                    autocomplete="catatan" autofocus>

                                @error('catatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="user_id" class="col-md-3 col-form-label text-md-right">{{ __('User') }}</label>

                            <div class="col-md-8">
                                <select class="form-control" name="user_id" id="user_id">
                                    <option value=""> Pilih Nama User </option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>


                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" id="buttoncloseexampleModal" class="btn btn-secondary"
                            data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
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

            $('#buttonexampleModal').click(function() {
                $('#exampleModal').modal('toggle')
            });

            $('#buttoncloseexampleModal').click(function() {
                $('#exampleModal').modal('hide')
            });

            // $('.btn-edit').click(function() {
            //     console.log($(this));
            // });
        });

        function editModal(id){
            $('#modal-edit'+id).modal('toggle');
        }
    </script>
@endpush
