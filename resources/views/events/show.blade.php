@extends('Frontend_client.main')
@include('Frontend_client.meta_dynamic')
@include('Frontend_client.favicon')

@section('main')
    <style>
        .slider-bg2 {
            background-image: url('{{ asset($event->image) }}');
            background-position: top center;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }
    </style>

    <div class="slider-area">
        <div class="slider-bg2 d-flex align-items-center ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                        <div class="hero__caption hero__caption2  hero__caption3 text-center">
                            <h2>{{ $event->name }}</h2>
                            <div class="cat-cap">
                                <p><a>{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</a>{{ $event->day }}</p>
                                <span class="price">&#2547; {{ (int) $event->taka }}</span>
                            </div>
                            <div class="details-btn text-center mt-40">
                                <a href="{{ route('bookings.create') }}" class="btn about-btn">Book Your Seat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="shedule-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 com-sm-11">
                    <div class="shedule-time mb-45 ">
                        <h2>Details</h2>
                        <p>{{ $event->description }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="details-btn text-center mt-40">
                        <a href="{{ route('bookings.create') }}" class="btn about-btn">Book Your Seat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
