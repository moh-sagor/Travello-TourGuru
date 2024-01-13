<div class="footer-wrapper">
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">

                            <div class="footer-logo mb-35">
                                <a href="{{ route('user.profile', $user->username) }}"><img height="120" width="300"
                                        src="{{ asset(optional($user->sitemap)->image) }}" alt></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Land behold it created good saw after she'd Our set living. Signs midst
                                        dominion creepeth morning laboris nisi ufsit aliquip.</p>
                                </div>

                                <div class="footer-social">
                                    <a href="{{ optional($sitemap)->twitter }}" target="_blank"><i
                                            class="fab fa-twitter-square"></i></a>
                                    <a href="{{ optional($sitemap)->facebook }}" target="_blank"><i
                                            class="fab fa-facebook-square"></i></a>
                                    <a href="{{ optional($sitemap)->linkedin }}" target="_blank"><i
                                            class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle mb-20">
                            <h4>Contact Us</h4>
                            <p>{{ optional($sitemap)->address }}</p>
                        </div>
                        <ul class="mb-20">
                            <li class="number">
                                <p style="color:yellow;">{{ optional($sitemap)->contact }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                <div class="row">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right text-center">
                            <p>Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> <a href="https://facebook.com/findmesagor/" target="_blank">All
                                    rights reserved</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
