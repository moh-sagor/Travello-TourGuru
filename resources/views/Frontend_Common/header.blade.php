<div class="header-area">
    <div class="main-header header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-xl-2 col-lg-2">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('Frontend/assets/img/logo/logo.png') }}"></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10">
                    <div class="menu-wrapper d-flex align-items-center justify-content-end">

                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ route('packages.create') }}">Buy Package</a></li>
                                    @auth
                                        <li><a href="/dashboard">Dashboard</li>
                                    @else
                                        <li><a href="{{ route('login') }}" target="_blank">Login</a></li>
                                    @endauth


                                    <li class="button-header">
                                        <a href="tel:+8801742214639" class="header-btn"> <i
                                                class="fas fa-phone-alt"></i> +8801742214639</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>
