@extends ('layouts.app')

@section ('content')
{{-- MENU KHUSUS ADMIN --}}
@if (Auth::user()->role_id == '1')
    <div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-1 fw-semibold">{{ $jmlsrtmsk}} <span class="fs-6 fw-normal"></span></div>
                            <div class="h4">Surat Masuk</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button"
                                data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                    href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-info">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-1 fw-semibold">{{ $jmlsrtklr }}<span class="fs-6 fw-normal"></span></div>
                            <div class="h4">Surat Keluar</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button"
                                data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                    href="#">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-warning">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-1 fw-semibold">{{ $jmldspss }} <span class="fs-6 fw-normal"></span></div>
                            <div class="h4">Disposisi</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button"
                                data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                    href="#">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Apa itu Arsip Surat?</h4>
            <p>Aplikasi arsip surat masuk keluar adalah sebuah aplikasi yang digunakan untuk mengelola surat masuk dan surat keluar sesuai alur yang ditetapkan.</p>
            <p class="mb-0">Manfaat adanya aplikasi arsip surat dapat mengurangi terjadinya kesulitan serta waktu yang dihabiskan untuk proses pencarian data-data surat, dan memperbaiki manajemen dari pengarsipan surat yang sudah ada.</p>
            <hr>
            <p class="mb-0">Fitur Aplikasi Arsip Surat</p>
            <p class="card-text light-300 text-dark text-start p-3">
                ✅ Kelola Surat Masuk <br>
                ✅ Kelola Surat Keluar <br>
                ✅ Kelola Disposisi <br>
            </p>
        </div>
        <!-- /.row-->

        <!-- /.row-->
    </div>
    </div>
    @endif

{{-- MENU KHUSUS Siswa --}}
@if (Auth::user()->role_id == '2')
    <div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-1 fw-semibold">{{ $jmlsrtmsk}} <span class="fs-6 fw-normal"></span></div>
                            <div class="h4">Surat Masuk</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button"
                                data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                    href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-info">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-1 fw-semibold">{{ $jmlsrtklr }}<span class="fs-6 fw-normal"></span></div>
                            <div class="h4">Surat Keluar</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button"
                                data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                    href="#">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-warning">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-1 fw-semibold">{{ $jmldspss }} <span class="fs-6 fw-normal"></span></div>
                            <div class="h4">Disposisi</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button"
                                data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                    href="#">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Apa itu Arsip Surat?</h4>
            <p>Aplikasi arsip surat masuk keluar adalah sebuah aplikasi yang digunakan untuk mengelola surat masuk dan surat keluar sesuai alur yang ditetapkan.</p>
            <p class="mb-0">Manfaat adanya aplikasi arsip surat dapat mengurangi terjadinya kesulitan serta waktu yang dihabiskan untuk proses pencarian data-data surat, dan memperbaiki manajemen dari pengarsipan surat yang sudah ada.</p>
            <hr>
            <p class="mb-0">Fitur Aplikasi Arsip Surat (Siswa)</p>
            <p class="card-text light-300 text-dark text-start p-3">
                ✅ Kelola Surat Masuk <br>
                ✅ Kelola Surat Keluar <br>
                ✅ Kelola Disposisi <br>
            </p>
        </div>
        <!-- /.row-->

        <!-- /.row-->
    </div>
    </div>
@endif


@endsection
