@extends ('layouts.app', ['title' => "Tambah Surat Masuk"])

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Tambah Surat Keluar</strong><span class="small ms-1"></span></div>
                        <div class="card-body">
                            <div class="example">
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-267">
                                        <form class="row g-3" action="{{ route('surat-keluar.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-12">
                                                <label class="form-label" for="kepada">Kepada <span class="text-danger">*</span></label>
                                                <input class="form-control @error('kepada') is-invalid @enderror"
                                                    id="kepada" name="kepada" type="text"
                                                    placeholder="Masukkan Nama Pengirim" value="{{ old('kepada') }}">
                                                @error('kepada')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="alamat">Alamat <span class="text-danger">*</span></label>
                                                <input class="form-control @error('alamat') is-invalid @enderror"
                                                    id="alamat" name="alamat" type="text"
                                                    placeholder="Masukkan Keterangan Alamat" value="{{ old('alamat') }}">
                                                @error('alamat')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-8">
                                                <label class="form-label" for="nomor-surat">Nomor Surat <span class="text-danger">*</span></label>
                                                <input class="form-control @error('nomor_surat') is-invalid @enderror"
                                                    id="nomor-surat" name="nomor_surat" type="text"
                                                    placeholder="Masukkan Nomor Surat" value="{{ old('nomor_surat') }}">
                                                @error('nomor_surat')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-4">
                                                <label class="form-label" for="tanggal-surat">Tanggal Surat <span class="text-danger">*</span></label>
                                                <input class="form-control @error('tanggal_surat') is-invalid @enderror"
                                                    id="tanggal-surat" name="tanggal_surat" type="date" value="{{ old('tanggal_surat') }}">
                                                @error('tanggal_surat')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="jumlah-lampiran">Jumlah Lampiran <span class="text-danger">*</span></label>
                                                <input class="form-control @error('jumlah_lampiran') is-invalid @enderror"
                                                    id="jumlah-lampiran" name="jumlah_lampiran" type="text"
                                                    placeholder="Masukkan Nomor Surat" value="{{ old('jumlah_lampiran') }}">
                                                @error('jumlah_lampiran')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-8">
                                                <label for="file_surat" class="form-label">Upload Dokumen <span class="text-danger">*</span></label>
                                                <input class="form-control @error('file_surat') is-invalid @enderror"
                                                    type="file" id="file-surat" name="file_surat" accept=".pdf,.doc">
                                                @error('file_surat')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="perihal">Perihal Surat <span class="text-danger">*</span></label>
                                                <input class="form-control @error('perihal') is-invalid @enderror"
                                                    id="perihal" name="perihal" type="text"
                                                    placeholder="Masukkan Perihal Surat" value="{{ old('perihal') }}">
                                                @error('perihal')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-5">
                                                <label class="form-label" for="tanggal-input">Tanggal Masuk <span class="text-danger">*</span></label>
                                                <input class="form-control @error('tanggal_input') is-invalid @enderror"
                                                    id="tanggal-input" name="tanggal_input" type="date" value="{{ old('tanggal_input') }}">
                                                @error('tanggal_input')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-7">
                                                <label class="form-label" for="kode-simpan">Kode Simpan <span class="text-danger">*</span></label>
                                                <input class="form-control @error('kode_simpan') is-invalid @enderror"
                                                    id="kode-simpan" name="kode_simpan" type="text"
                                                    placeholder="Masukkan Kode Simpan" value="{{ old('kode_simpan') }}">
                                                @error('kode_simpan')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-floating">
                                                <textarea class="form-control @error('isi_ringkasan') is-invalid @enderror" placeholder="Leave a comment here"
                                                id="isi-ringkasan" name="isi_ringkasan" style="height: 100px">{{ old('isi_ringkasan') }}</textarea>
                                                <label for="isi_ringkasan">Masukkan Keterangan Surat <span class="text-danger">*</span></label>
                                                @error('isi_ringkasan')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-5">
                                                <label class="form-label" for="tanggal-rapat">Tanggal Rapat <span class="text-danger">*</span></label>
                                                <input class="form-control @error('tanggal_rapat') is-invalid @enderror"
                                                    id="tanggal-rapat" name="tanggal_rapat" type="date" value="{{ old('tanggal_rapat') }}">
                                                @error('tanggal_rapat')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="lokasi">Lokasi <span class="text-danger">*</span></label>
                                                <input class="form-control @error('lokasi') is-invalid @enderror"
                                                    id="lokasi" name="lokasi" type="text"
                                                    placeholder="Masukkan Keterangan Lokasi" value="{{ old('lokasi') }}">
                                                @error('lokasi')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
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
