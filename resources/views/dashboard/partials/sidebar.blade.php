<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                </li>
                <li class="sb-sidenav-menu-heading">Interface</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employees.index')}}">
                        <div class="sb-nav-link-icon">
                            <img class="nav-icon" src="{{ asset('img/user.png') }}" alt="logo" style="width: 35px; height: 35px;">
                        </div>
                        Data Pegawai
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
