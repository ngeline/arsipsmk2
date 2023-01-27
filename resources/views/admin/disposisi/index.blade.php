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
                        <a href="{{ route('disposisi.create') }}" class="btn btn-primary btn-l" role="button">Tambah Data</a>


                            <table id="tabel-data" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nomor Surat</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Catatan</th>
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
                                        <td><a href=""class="btn icon icon-left btn-warning" role="button"><i data-feather="trash"></i></a></td>
                                        <td><a href=""class="btn icon icon-left btn-danger" role="button"><i data-feather="trash"></i></a></td>
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

