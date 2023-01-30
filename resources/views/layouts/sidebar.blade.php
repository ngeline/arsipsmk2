<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <!-- ARSIP SURAT -->
        <div class="sidebar-brand d-none d-md-flex">
            <img class="" width="150" height="46" src="{{ asset('core-ui') }}/assets/brand/logosmk2.png"
                alt="user@email.com"></img>
        </div>
    </div>

    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link"
                href="@if (auth()->user()->getNameRole() == 'Admin') {{ route('admin.dashboard') }}
            @else {{ route('siswa.dashboard') }} @endif">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-speedometer">
                    </use>
                </svg> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link"
                href="@if (auth()->user()->getNameRole() == 'Admin') {{ route('admin.profile') }}
            @else {{ route('siswa.profile') }} @endif">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-user">
                    </use>
                </svg> Profil</a></li>
        {{-- MENU KHUSUS ADMIN --}}
        @if (Auth::user()->role_id == '1')
            <li class="nav-title">Arsip Surat</li>
            <li class="nav-item"><a class="nav-link" href="{{ route('surat-masuk.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-note-add"></use>
                    </svg> Surat Masuk</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('surat-keluar.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-description">
                        </use>
                    </svg> Surat Keluar</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('disposisi.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                    </svg> Disposisi</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-user-follow">
                        </use>
                    </svg> Users</a></li>
        @endif

        {{-- MENU KHUSUS Siswa --}}
        @if (Auth::user()->role_id == '2')
            <li class="nav-title">Arsip Surat</li>
            <li class="nav-item"><a class="nav-link" href="{{ route('siswa.surat-masuk.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-note-add"></use>
                    </svg> Surat Masuk</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('siswa.surat-keluar.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-description">
                        </use>
                    </svg> Surat Keluar</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('siswa.disposisi.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('core-ui') }}/vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                    </svg> Disposisi</a></li>
        @endif
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
