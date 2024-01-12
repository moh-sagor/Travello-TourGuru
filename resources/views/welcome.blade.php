@extends('Frontend_Common.main')
@include('Frontend_Common.meta_static')
@section('main')
    <style>
        h3 {
            font-size: 22px;
        }

        label {
            font-weight: 500;
        }

        /* DEMO 01 */
        .pricing-table-3 {
            background-color: #FFF;
            margin: 15px auto;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            border-radius: 0px 10px 0px 10px;
            overflow: hidden;
            position: relative;
            min-height: 250px;
            transition: all ease-in-out 0.25s;
        }

        .pricing-table-3:hover {
            transform: scale(1.1, 1.1);
            cursor: pointer;
        }

        .pricing-table-3.basic .price {
            background-color: #28b6f6;
            color: #FFF;
        }

        .pricing-table-3.premium .price {
            background-color: #ff9f00;
            color: #FFF;
        }

        .pricing-table-3.business .price {
            background-color: #c3185c;

            color: #FFF;
        }


        .pricing-table-3.legend .price {
            background-color: #29890f;

            color: #FFF;
        }


        .pricing-table-3 .pricing-table-header {
            background-color: #212121;
            color: #FFF;
            padding: 20px 0px 0px 20px;
            position: absolute;
            z-index: 5;
        }

        .pricing-table-3 .pricing-table-header p {
            font-size: 12px;
            opacity: 0.7;
        }

        .pricing-table-3 .pricing-table-header::before {
            content: "";
            position: absolute;
            left: -50px;
            right: -180px;
            height: 125px;
            top: -50px;
            background-color: #212121;
            z-index: -1;
            transform: rotate(-20deg)
        }

        .pricing-table-3 .price {
            position: absolute;
            top: 0px;
            text-align: right;
            padding: 110px 20px 0px 0px;
            right: 0px;
            left: 0px;
            font-size: 20px;
            z-index: 4;
        }

        .pricing-table-3 .price::before {
            content: "";
            position: absolute;
            left: 0px;
            right: 0px;
            height: 100px;
            bottom: -25px;
            background-color: inherit;
            transform: skewY(10deg);
            z-index: -1;
            box-shadow: 0px 5px 0px 5px rgba(0, 0, 0, 0.05);
        }


        .pricing-table-3 .pricing-body {
            padding: 20px;
            padding-top: 200px;
        }

        .pricing-table-3 .pricing-table-ul li {
            color: rgba(0, 0, 0, 0.7);
            font-size: 13px;
            padding: 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .pricing-table-3 .pricing-table-ul .fa {
            margin-right: 10px;
        }

        .pricing-table-3.basic .pricing-table-ul .fa {
            color: #28b6f6;
        }

        .pricing-table-3.premium .pricing-table-ul .fa {
            color: #ff9f00;
        }

        .pricing-table-3.business .pricing-table-ul .fa {
            color: #c3185c;
        }

        .pricing-table-3.legend .pricing-table-ul .fa {
            color: #40fc0c;
        }

        .pricing-table-3 .view-more {
            margin: 10px 20px;
            display: block;
            text-align: center;
            background-color: #212121;
            padding: 10px 0px;
            color: #FFF;
        }
    </style>
    <div class="slider-area fix">
        <div class="slider-active">
            <div class="single-slider">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8 col-md-9 col-sm-12">
                            <div class="hero__caption text-center">
                                <h1 data-animation="fadeInUp" data-delay="0.1s">Get Your Travel Company <dd>Website at Low
                                        Price</dd>
                                </h1>
                                <p data-animation="fadeInUp" data-delay="0.6s">Start your Website with TravelmatesBD,
                                    Purchase
                                    a plan create your web pages where
                                    your dreams come true, and lasting memories are made.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="car-img slider-bg1 slider-height d-flex justify-content-center align-items-end">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8">
                        <div class="car running">
                            <img src="{{ asset('Frontend/assets/img/hero/car.png') }}" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="services-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">

                    <div class="section-tittle text-center mb-45 ">
                        <span>Check our best promotional package</span>
                        <h2>Our Packages</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="pricing-table-3 basic">
                    <div class="pricing-table-header">
                        <h4><strong style="color: #FFF;">STARTER</strong></h4>
                    </div>
                    <div class="price"><strong>1 Month</strong> | 200 TK</div>
                    <div class="pricing-body">
                        <ul class="pricing-table-ul">
                            <li>Shareable Website Link</li>
                            <li>Daily Sales Statemant</li>
                            <li>Monthly Sales Statement</li>
                            <li class="not-avail"> Yearly Sales Statement</li>
                            <li class="not-avail">Unlimited Post</li>
                            <li class="not-avail">Page Customization</li>
                            <li class="not-avail">24 x 7 Support</li>
                        </ul><a href="{{ route('packages.create') }}" class="btn btn-sm">Start Your Website</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="pricing-table-3 premium">
                    <div class="pricing-table-header">
                        <h4><strong style="color: #FFF;">BASIC</strong></h4>
                    </div>
                    <div class="price"><strong>3 Month</strong> | 500 TK</div>
                    <div class="pricing-body">
                        <ul class="pricing-table-ul">
                            <li>Shareable Website Link</li>
                            <li>Daily Sales Statemant</li>
                            <li>Monthly Sales Statement</li>
                            <li class="not-avail"> Yearly Sales Statement</li>
                            <li class="not-avail">Unlimited Post</li>
                            <li class="not-avail">Page Customization</li>
                            <li class="not-avail">24 x 7 Support</li>
                        </ul><a href="{{ route('packages.create') }}" class="btn btn-sm">Start Your Website</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="pricing-table-3 business">
                    <div class="pricing-table-header">
                        <h4><strong style="color: #FFF;">BUSINESS</strong></h4>
                    </div>
                    <div class="price"><strong>6 Month</strong> | 1000 TK</div>
                    <div class="pricing-body">
                        <ul class="pricing-table-ul">
                            <li>Shareable Website Link</li>
                            <li>Daily Sales Statemant</li>
                            <li>Monthly Sales Statement</li>
                            <li class="not-avail"> Yearly Sales Statement</li>
                            <li class="not-avail">Unlimited Post</li>
                            <li class="not-avail">Page Customization</li>
                            <li class="not-avail">24 x 7 Support</li>
                        </ul><a href="{{ route('packages.create') }}" class="btn btn-sm">Start Your Website</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="pricing-table-3 legend">
                    <div class="pricing-table-header">
                        <h4><strong style="color: #FFF;">PREMIUM</strong></h4>
                    </div>
                    <div class="price"><strong>12 Month</strong> | 1800 TK</div>
                    <div class="pricing-body">
                        <ul class="pricing-table-ul">
                            <li>Shareable Website Link</li>
                            <li>Daily Sales Statemant</li>
                            <li>Monthly Sales Statement</li>
                            <li class="not-avail"> Yearly Sales Statement</li>
                            <li class="not-avail">Unlimited Post</li>
                            <li class="not-avail">Page Customization</li>
                            <li class="not-avail">24 x 7 Support</li>
                        </ul><a href="{{ route('packages.create') }}" class="btn btn-sm">Start Your Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="support-company-area bottom-padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="support-location-img">
                        <img src="{{ asset('Frontend/assets/img/gallery/about.png') }}" alt>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="right-caption">

                        <div class="section-tittle">
                            <span>About Us</span>
                            <h2>Webpages service at low price..</h2>
                        </div>
                        <div class="support-caption">
                            <p class="mb-50">Your gateway to seamless web solutions and unforgettable travel
                                experiences. Build your dream website or choose from curated travel packages to embark on
                                journeys that redefine adventure. Elevate your online presence and explore the world with
                                Travelmatesbd.</p>
                            <a href="{{ route('packages.create') }}" class="btn about-btn">Start Your Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="project-us pb-padding section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-7 col-md-10">
                    <div class="section-tittle  text-center mb-40">
                        <span>FAQ</span>
                        <h2>Full range of travel service</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="project-caption">

                        <div class="collapse-wrapper">
                            <div class="accordion" id="accordionExample">

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <a href="index.html#" class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">Build your own website.</a>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Just purchase a package. being admin, customize your site and start posting your
                                            tour package on your own page.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <a href="index.html#" class="btn-link" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">Track your earning.</a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            You can track your earning daily, monthly, yearly basis when you will be an
                                            admin.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <a href="index.html#" class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">Low price service.</a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            We provide very low price service with started only 200tk.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingfouree">
                                        <h2 class="mb-0">
                                            <a href="index.html#" class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseFoure" aria-expanded="false"
                                                aria-controls="collapseFoure">24*7 Customer care service.</a>
                                        </h2>
                                    </div>
                                    <div id="collapseFoure" class="collapse" aria-labelledby="headingfouree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Got a problem ? just send us a message. we will solve your problem as soon as
                                            possible.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-10 col-sm-10">
                    <div class="project-right-cap">
                        <div class="project-right-img">
                            <img src="{{ asset('Frontend/assets/img/gallery/about2.png') }}" alt>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="details-btn text-center mt-40">
                        <a href="{{ route('packages.create') }}" class="btn about-btn">Start Your Website</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="instagram-area fix">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="instagram-active owl-carousel">
                        <div class="single-instagram">
                            <img src="{{ asset('Frontend/assets/img/gallery/instra1.jpg') }}" alt>
                            <a href="index.html#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="{{ asset('Frontend/assets/img/gallery/instra2.jpg') }}" alt>
                            <a href="index.html#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="{{ asset('Frontend/assets/img/gallery/instra3.jpg') }}" alt>
                            <a href="index.html#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="{{ asset('Frontend/assets/img/gallery/instra4.jpg') }}" alt>
                            <a href="index.html#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="{{ asset('Frontend/assets/img/gallery/instra5.jpg') }}" alt>
                            <a href="index.html#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="{{ asset('Frontend/assets/img/gallery/instra4.jpg') }}" alt>
                            <a href="index.html#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
