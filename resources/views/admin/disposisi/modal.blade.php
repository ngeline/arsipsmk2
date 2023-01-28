<div class="modal fade" id="edit{{ $disposisi->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Disposisi</h5>
            </div>
            <form method="POST" action="{{ route('disposisi.update', $disposisi->id ) }}">
                
                @csrf
                <div class="modal-body">

                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nomor Surat') }}</label>

                        <div class="col-md-8">
                            <select class="form-control" name="surat_masuk_id" id="surat_masuk_id">
                                <option value=""> Pilih Nomor Surat </option>
                            @foreach ($surat_masuks as $surat_masuk)
                                @if ( $disposisi->suratMasuk->nomor_surat == $surat_masuk->id)
                                <option value="{{ $disposisi->suratMasuk->nomor_surat }}">{{ $surat_masuk->nomor_surat }}</option>
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
                        <label for="sifat_surat_id" class="col-md-3 col-form-label text-md-right">{{ __('Sifat Surat') }}</label>

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
                            <input  id="catatan" type="text"
                                class="form-control @error('catatan') is-invalid @enderror" name="catatan"
                                 required autocomplete="catatan" autofocus>

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