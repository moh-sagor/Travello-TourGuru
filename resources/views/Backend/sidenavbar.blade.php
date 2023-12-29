<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="/">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Home
                </a>
                @if (Auth::user()->role == 'superadmin')
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Manage User
                    </a>
                @elseif (Auth::user()->role == 'admin')
                    <a class="nav-link" href="/">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Admin
                    </a>
                @else
                    <a class="nav-link" href="/">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        User
                    </a>
                @endif

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as: {{ Auth::User()->username }} </div>
            {{ Auth::User()->name }}
        </div>
    </nav>
</div>
