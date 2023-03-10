@extends ('layouts.app', ['title' => 'Profile'])

@section('content')
    <div class="body flex-grow-1 px-3">
        @include('flash-message')
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Profile</strong><span class="small ms-1"></span></div>
                        <div class="card-body">
                            <div class="example">
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-267">
                                        <form method="POST" action="{{ route('profil.update', $user->id) }}">
                                            @csrf

                                            <div class="form-group row mb-3">
                                                <label for="name"
                                                    class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                                                <div class="col-md-6">
                                                    <input style="background-color: #ecebeb; color: black;" id="name"
                                                        type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" value="{{ $user->name }}" required
                                                        autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row mb-5">
                                                <label for="email"
                                                    class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                <div class="col-md-6">
                                                    <input style="background-color: #ecebeb; color: black;" id="email"
                                                        type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ $user->email }}" required
                                                        autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <p><b class="text-danger fs-5">! </b>Jika tidak ingin mengganti password,
                                                    input password dan konfirmasi password dikosongkan.</p>
                                                <label for="password"
                                                    class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                    <input style="background-color: #ecebeb; color: black;" id="password"
                                                        type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password-confirm"
                                                    class="col-md-2 col-form-label text-md-right">{{ __('Korfirmasi Password') }}</label>

                                                <div class="col-md-6">
                                                    <input style="background-color: #ecebeb; color: black;"
                                                        id="password-confirm" type="password" class="form-control"
                                                        name="password_confirmation">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <div class="col-md-6 offset-md-2">
                                                    <input type="checkbox" onclick="togglePassword()"> Tampilkan password
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-2">
                                                    <button type="submit" class="btn btn-primary"
                                                        style="width: 100%; font-weight: bold; font-size: 16px;">
                                                        Simpan
                                                    </button>
                                                </div>
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

@push('js')
    <script>
        function togglePassword(id) {
            let password = document.getElementById('password');
            let passwordConfirm = document.getElementById('password-confirm');

            if (password.type === "password" && passwordConfirm.type === "password") {
                password.type = "text";
                passwordConfirm.type = "text";
            } else {
                password.type = "password";
                passwordConfirm.type = "password";
            }
        }
    </script>
@endpush
