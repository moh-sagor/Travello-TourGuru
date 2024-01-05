<div class="header-area">
    <div class="main-header header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-xl-2 col-lg-2">
                    <div class="logo">
                        <a href="{{ route('user.profile', $user->username) }}"><img src="{{ asset($sitemap->image) }}"
                                height="57" width="165" alt></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10">
                    <div class="menu-wrapper d-flex align-items-center justify-content-end">

                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="event.html">Events</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="index.html#">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="events_details.html">Events Details</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>

                                    @auth
                                        <li><a href="/dashboard">Dashboard</li>
                                    @else
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                    @endauth


                                    <li class="button-header">
                                        <p class="header-btn"> <i class="fas fa-phone-alt"></i>{{ $sitemap->contact }}
                                        </p>
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