<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
                <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
        </button>
        <a class="header-brand d-md-none" href="#">
            <img class="" width="90" height="40" src="{{ asset('core-ui') }}/assets/brand/logosmk2.png">
        </a>
        <ul class="header-nav ms-3">
            <p class="mt-2">Selamat Datang, <b>{{ auth()->user()->name }}</b></p>
            <li class="nav-item dropdown">
                <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md"><img class="avatar-img"
                            src="{{ asset('core-ui') }}/assets/img/avatars/user.png" alt="user@email.com"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">Setting</div>
                    </div>
                    <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                            <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg> Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <svg class="icon me-2">
                            <use
                                xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-account-logout">
                            </use>
                        </svg> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</header>
