<div class="modal fade" id="modal-edit{{ $disposisi->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Disposisi</h5>
            </div>
            <form method="POST" action="{{ route('siswa.disposisi.update', $disposisi->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group row mb-3">
                        <label for="name"
                            class="col-md-3 col-form-label text-md-right">{{ __('Nomor Surat') }}</label>

                        <div class="col-md-8">
                            <select class="form-control" name="surat_masuk_id" id="surat_masuk_id">
                                <option value=""> Pilih Nomor Surat </option>
                                @foreach ($surat_masuks as $surat_masuk)
                                    @if ($disposisi->surat_masuk_id == $surat_masuk->id)
                                        <option value="{{ $surat_masuk->id }}" selected>{{ $surat_masuk->nomor_surat }}
                                        </option>
                                    @else
                                        <option value="{{ $surat_masuk->id }}">{{ $surat_masuk->nomor_surat }}</option>
                                    @endif
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
                                    @if ($disposisi->sifat_surat_id == $sifat_surat->id)
                                        <option value="{{ $sifat_surat->id }}" selected>{{ $sifat_surat->nama }}
                                        </option>
                                    @else
                                        <option value="{{ $sifat_surat->id }}">{{ $sifat_surat->nama }}</option>
                                    @endif
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
                                class="form-control @error('catatan') is-invalid @enderror" name="catatan"
                                value="{{ $disposisi->catatan }}" required autocomplete="catatan" autofocus>

                            @error('catatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="form-group row mb-3">
                        <label for="user_id" class="col-md-3 col-form-label text-md-right">{{ __('User') }}</label>
                        <div class="col-md-8">
                            <select class="form-control" name="kepada" id="kepada">
                                <option value=""> Pilih Nama User </option>
                                @foreach ($users as $user)
                                    @if (auth()->user()->name != $user->name)
                                        @if ($disposisi->user_id == $user->id)
                                            <option value="{{ $user->name }}" selected>{{ $user->name }}</option>
                                        @else
                                            <option value="{{ $user->name }}">{{ $user->name }}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>


                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="editModal({{ $disposisi->id }})">Kembali</button>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
