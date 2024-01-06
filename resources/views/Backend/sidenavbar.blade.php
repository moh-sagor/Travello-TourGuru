<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @if (Auth::user()->role == 'superadmin' || Auth::user()->role == 'admin')
                    <a class="nav-link" href="{{ route('user.profile', Auth::user()->username) }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Home
                    </a>
                @endif
                <a class="nav-link" href="{{ route('users.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                @if (Auth::user()->role == 'superadmin')
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Manage User
                    </a>
                    <a class="nav-link" href="{{ route('sitemaps.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Site Info
                    </a>
                @elseif (Auth::user()->role == 'admin')
                    <a class="nav-link" href="{{ route('sitemaps.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Site Info
                    </a>
                @else
                    <p class="nav-link">
                        Not Allow to Build Website because of user. must need to buy a package to build your website and
                        upgrade you as admin.
                    </p>
                @endif

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as: {{ Auth::User()->username }} </div>
            {{ Auth::User()->name }}
        </div>
    </nav>
</div>
