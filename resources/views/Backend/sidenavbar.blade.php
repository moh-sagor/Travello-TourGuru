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
                {{-- superadmin  --}}
                @if (Auth::user()->role == 'superadmin')
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Manage User
                    </a>
                    <a class="nav-link" href="{{ route('packages.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Package buying info
                    </a>
                    <a class="nav-link" href="{{ route('sitemaps.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Customize Site
                    </a>

                    <a class="nav-link" href="{{ route('events.create') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Create Events
                    </a>
                    <a class="nav-link" href="{{ route('events.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        All Events
                    </a>



                    {{-- admin  --}}
                @elseif (Auth::user()->role == 'admin')
                    <a class="nav-link" href="{{ route('sitemaps.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Customize Site
                    </a>
                    <a class="nav-link" href="{{ route('events.create') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Create Events
                    </a>
                    <a class="nav-link" href="{{ route('events.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        All Events
                    </a>
                @else
                    {{-- user  --}}
                    <p class="nav-link">
                        Not Allow to Build Website because of user. You must need to buy a package to build your website
                        and
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
