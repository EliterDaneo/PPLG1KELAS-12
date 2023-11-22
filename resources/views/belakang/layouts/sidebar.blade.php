<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            @if ($user->level == 'admin')
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="{{ route('dataSiswa') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-school"></i></div>
                    Siswa
                </a>
                <a class="nav-link" href="{{ route('dataGuru') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                    Guru
                </a>
                <a class="nav-link" href="{{ route('dataMapel') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                    Mapel
                </a>
                <a class="nav-link" href="{{ route('dataJurusan') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-route"></i></div>
                    Jurusan
                </a>
                <a class="nav-link" href="{{ route('dataKelas') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-landmark"></i></div>
                    Kelas
                </a>
            @elseif($user->level == 'siswa')
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ route('dataMapelSiswa') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                    Mapel
                </a>
                <a class="nav-link" href="{{ route('dataJurusanSiswa') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-route"></i></div>
                    Jurusan
                </a>
                <a class="nav-link" href="{{ route('dataKelasSiswa') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-landmark"></i></div>
                    Kelas
                </a>
            @endif

        </div>
    </div>
</nav>
