<div class="modal fade" id="modal-edit{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            </div>
            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group row mb-3">
                        <label for="catatan" class="col-md-3 col-form-label text-md-right">Nama</label>

                        <div class="col-md-8">
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ $user->name }}" required autofocus placeholder="Nama">
                            {{-- @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="sifat_surat_id"
                            class="col-md-3 col-form-label text-md-right">{{ __('Role') }}</label>

                        <div class="col-md-8">
                            <select class="form-control" name="role_id" id="role_id" required>
                                <option value=""> Pilih Role </option>
                                @foreach ($roles as $role)
                                    @if ($user->role_id == $role->id)
                                        <option value="{{ $user->role_id }}" selected>{{ $role->nama }}</option>
                                    @else
                                        <option value="{{ $role->id }}">{{ $role->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="catatan" class="col-md-3 col-form-label text-md-right">Email</label>

                        <div class="col-md-8">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                name="email" value="{{ $user->email }}" required>
                            {{-- @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <p><b class="text-danger fs-5">! </b>Jika tidak ingin mengganti password, input password dan konfirmasi password dikosongkan.</p>
                        <label for="catatan" class="col-md-3 col-form-label text-md-right">Password</label>

                        <div class="col-md-8">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Password">
                            {{-- @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="catatan" class="col-md-3 col-form-label text-md-right">Konfirmasi
                            Password</label>
                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="editModal({{ $user->id }})">Kembali</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
