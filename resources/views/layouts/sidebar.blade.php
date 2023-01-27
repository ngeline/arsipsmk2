<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <!-- <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use href="{{ asset('core-ui') }}/assets/brand/logosmk2.png"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use href="{{ asset('core-ui') }}/assets/brand/logosmk2.png"></use>
        </svg> -->
        ARSIP SURAT
    </div>
    <!-- <div class="sidebar-brand d-none d-md-flex">
        <img class="avatar-img" width="1" height="1" src="{{ asset('core-ui') }}/assets/brand/logosmk2.png" alt="user@email.com"></img>
    </div> -->
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="{{ url('admin/dashboard')}}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-speedometer">
                    </use>
                <!-- </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li> -->
                </svg> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('admin/profile')}}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-user">
                    </use>
                </svg> Profil</a></li>
        <!-- <li class="nav-title">Theme</li>
        <li class="nav-item"><a class="nav-link" href="colors.html">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
                </svg> Colors</a></li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                </svg> Typography</a></li> -->
        <li class="nav-title">Components</li>
        <li class="nav-item"><a class="nav-link" href="{{ url('admin/surat-masuk')}}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-note-add"></use>
            </svg> Surat Masuk</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('admin/surat-keluar')}}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-description"></use>
            </svg> Surat Keluar</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('admin/disposisi')}}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
            </svg> Disposisi</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="charts.html">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
            </svg> Laporan Surat</a></li> -->
        <li class="nav-item"><a class="nav-link" href="{{ url('admin/users')}}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
            </svg> Users</a></li>

        <!-- <li class="nav-title">Extras</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                </svg> Pages</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                        <svg class="nav-icon">
                            <use
                                xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-account-logout">
                            </use>
                        </svg> Login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                        <svg class="nav-icon">
                            <use
                                xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-account-logout">
                            </use>
                        </svg> Register</a></li>
                <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-bug">
                            </use>
                        </svg> Error 404</a></li>
                <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-bug">
                            </use>
                        </svg> Error 500</a></li>
            </ul>
        </li> -->
        <!-- <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/"
                target="_blank">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-description">
                    </use>
                </svg> Docs</a></li>
        <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
                </svg> Try CoreUI
                <div class="fw-semibold">PRO</div>
            </a></li> -->
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
