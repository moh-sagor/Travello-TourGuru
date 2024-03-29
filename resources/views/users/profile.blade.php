@extends('Frontend_client.main')
@include('Frontend_client.name_meta_dynamic')
@include('Frontend_client.favicon')
@section('main')
    <div class="slider-area fix">
        <div class="slider-active">
            <div class="single-slider">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8 col-md-9 col-sm-12">
                            <div class="hero__caption text-center">
                                <h1 data-animation="fadeInUp" data-delay="0.1s">{{ optional($sitemap)->banner_1 }}
                                </h1>
                                <p data-animation="fadeInUp" data-delay="0.6s">{{ optional($sitemap)->banner_2 }}</p>
                                <a href="index.html#" class="btn slider-btn " data-animation="bounceIn"
                                    data-delay="1s">Explore Destinations</a>
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
                        <span>Check our best promotional tour</span>
                        <h2>Ongoing & Upcoming Events </h2>
                    </div>
                </div>
            </div>
            <div class="services-active">
                @foreach ($events as $event)
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="single-cat mb-30"
                            style="border: 1px solid #ddd; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column;">
                            <div class="cat-img" style="flex: 1 0 auto;">
                                <img src="{{ asset($event->image) }}" style="width: 100%; height: 100%; object-fit: cover;"
                                    alt="Event Image">
                            </div>
                            <div class="cat-cap">
                                <div class="pricing d-flex justify-content-between">
                                    <h4>{{ $event->name }}</h4>
                                    <span class="price"> <span>&#2547;</span>{{ (int) $event->taka }}</span>
                                </div>
                                <div class="row" style="justify-content: space-between;">
                                    <div class="col-md-6 col-lg-6 col-6">
                                        <p>{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-6 justify-content-end ">
                                        <p>{{ $event->day }}</p>
                                    </div>
                                </div>
                                <a style="margin: 20px 20px auto auto;" class="btn btn-sm text-center"
                                    href="{{ route('events.show', $event->id) }}">
                                    Tour Details </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


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
                            <h2>{{ optional($sitemap)->about_1 }}</h2>
                        </div>
                        <div class="support-caption">
                            <p class="mb-50">{{ optional($sitemap)->about_2 }}</p>
                            <a href="about.html" class="btn about-btn">Book Your Destination</a>
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
                                                aria-controls="collapseTwo">Starts the
                                                automated process.</a>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Automated Ticketing system is intregated.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <a href="index.html#" class="btn-link" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">The automated process starts.</a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            The automated process starts as soon as
                                            your clothes go into the machine. Duis cursus, mi
                                            quis viverra ornare.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <a href="index.html#" class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">Automated
                                                process starts.</a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            The automated process starts as soon as
                                            your clothes go into the machine. Duis cursus, mi
                                            quis viverra ornare.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingfouree">
                                        <h2 class="mb-0">
                                            <a href="index.html#" class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseFoure" aria-expanded="false"
                                                aria-controls="collapseFoure">Process the
                                                automated magic.</a>
                                        </h2>
                                    </div>
                                    <div id="collapseFoure" class="collapse" aria-labelledby="headingfouree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            The automated process starts as soon as
                                            your clothes go into the machine. Duis cursus, mi
                                            quis viverra ornare.
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
                        <a href="index.html#" class="btn about-btn">Book Your Destination</a>
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
