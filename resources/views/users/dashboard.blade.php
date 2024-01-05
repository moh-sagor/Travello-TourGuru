@extends('Backend.main')
@section('backend_main')
    <style>
        .card {
            background-color: #fff;
            border-radius: 10px;
            border: none;
            position: relative;
            margin-bottom: 30px;
            box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1), 0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1), 0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12), 0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
        }

        .l-bg-cherry {
            background: linear-gradient(to right, #493240, #f09) !important;
            color: #fff;
        }

        .l-bg-blue-dark {
            background: linear-gradient(to right, #373b44, #4286f4) !important;
            color: #fff;
        }

        .l-bg-green-dark {
            background: linear-gradient(to right, #0a504a, #38ef7d) !important;
            color: #fff;
        }

        .l-bg-orange-dark {
            background: linear-gradient(to right, #a86008, #ffba56) !important;
            color: #fff;
        }

        .card .card-statistic-3 .card-icon-large .fas,
        .card .card-statistic-3 .card-icon-large .far,
        .card .card-statistic-3 .card-icon-large .fab,
        .card .card-statistic-3 .card-icon-large .fal {
            font-size: 110px;
        }

        .card .card-statistic-3 .card-icon {
            text-align: center;
            line-height: 50px;
            margin-left: 15px;
            color: #000;
            position: absolute;
            right: -5px;
            top: 20px;
            opacity: 0.1;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }

        .l-bg-green {
            background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
            color: #fff;
        }

        .l-bg-orange {
            background: linear-gradient(to right, #f9900e, #ffba56) !important;
            color: #fff;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }
    </style>
    <div class="container">
        <div class="row mt-3 ">
            <div class="col-xl-3 col-lg-3">
                <div class="card l-bg-cherry">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Hi, {{ $user->name }}</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-12">
                                <h4 class="d-flex align-items-center mb-0">
                                    {{ $user->role }}
                                </h4>
                            </div>
                            <div class="col-12">
                                <h6 class="d-flex align-items-center mb-0">
                                    {{ $user->email }}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Pack :
                                @if ($user->role === 'superadmin')
                                    <span>Owner</span>
                                @else
                                    {{ $user->duration }}
                                @endif
                            </h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-12">
                                <h5 class="d-flex align-items-center mb-0">
                                    @if ($user->duration === '0 month')
                                        EXPIRED
                                    @else
                                        <div class="countdown" data-duration="{{ $user->duration }}"
                                            id="countdown_{{ $user->id }}"></div>
                                    @endif

                                </h5>
                            </div>
                            <div class="col-12">
                                <h6 class="d-flex align-items-center mb-0">
                                    {{ \Carbon\Carbon::parse($user->countdown_end_time)->format('d/m/Y h:i:s A') }}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div class="card l-bg-green-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Your Website Link</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-12 mt-2">
                                <h5 class="d-flex align-items-center mb-0">
                                    @if ($user->role === 'superadmin' || $user->role === 'admin')
                                        <a class="btn btn-sm btn-primary me-3"
                                            href="{{ route('user.profile', $user->username) }}" target="_blank"> View
                                            Website</a>
                                        <button class="btn btn-warning share-button btn-sm"
                                            data-url="{{ route('user.profile', $user->username) }}">
                                            <i class="fas fa-share"></i> Share
                                        </button>
                                    @else
                                        <span class="btn btn-sm btn-danger">To get your Website link must subscribe a
                                            package. </span>
                                    @endif
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div class="card l-bg-orange-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Revenue Today</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    $11.61k
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>2.5% <i class="fa fa-arrow-up"></i></span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- countdown for subscription  --}}
    <script>
        function durationToMilliseconds(duration) {
            switch (duration) {
                case '1 month':
                    return 30 * 24 * 60 * 60 * 1000; // 30 days
                case '3 months':
                    return 91 * 24 * 60 * 60 * 1000; // 91 days
                case '6 months':
                    return 183 * 24 * 60 * 60 * 1000; // 183 days
                case '12 months':
                    return 365 * 24 * 60 * 60 * 1000; // 365 days
                default:
                    return 0;
            }
        }

        function initializeCountdown(duration, userId, storedEndTime) {
            console.log("Initializing countdown for user " + userId + " with duration: " + duration);

            var milliseconds = durationToMilliseconds(duration);

            // Use the stored end time if available and in the future
            if (storedEndTime) {
                var storedEnd = new Date(storedEndTime);

                if (!isNaN(storedEnd) && storedEnd > new Date()) {
                    milliseconds = storedEnd - new Date();
                }
            }

            var end = new Date();
            end.setTime(end.getTime() + milliseconds);

            var _second = 1000;
            var _minute = _second * 60;
            var _hour = _minute * 60;
            var _day = _hour * 24;
            var timer;

            function showRemaining() {
                var now = new Date();
                var distance = end - now;

                if (distance < 0) {
                    clearInterval(timer);
                    document.getElementById('countdown_' + userId).innerHTML = 'EXPIRED!';
                    return;
                }

                var days = Math.floor(distance / _day);
                var hours = Math.floor((distance % _day) / _hour);
                var minutes = Math.floor((distance % _hour) / _minute);
                var seconds = Math.floor((distance % _minute) / _second);

                document.getElementById('countdown_' + userId).innerHTML = days + 'days ';
                document.getElementById('countdown_' + userId).innerHTML += hours + 'hrs ';
                document.getElementById('countdown_' + userId).innerHTML += minutes + 'mins ';
                document.getElementById('countdown_' + userId).innerHTML += seconds + 'secs';
            }

            showRemaining(); // Initial update
            timer = setInterval(showRemaining, 1000);

            // Store the end time in local storage
            localStorage.setItem('countdown_end_time_' + userId, end.toString());
        }


        initializeCountdown('{{ $user->duration }}', {{ $user->id }}, '{{ $user->countdown_end_time }}');


        // Update the countdown when the duration is changed
        function updateCountdownOnDurationChange(userId, newDuration) {
            var storedEndTime = localStorage.getItem('countdown_end_time_' + userId);
            initializeCountdown(newDuration, userId, storedEndTime);
        }
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Share button click event
            const shareButtons = document.querySelectorAll('.share-button');
            shareButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const url = this.getAttribute('data-url');
                    showShareDialog(url);
                });
            });

            // Function to show the SweetAlert share dialog
            function showShareDialog(url) {
                Swal.fire({
                    title: 'Share Blog',
                    html: `
                <a href="https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <i class="fab fa-facebook"></i> Share on Facebook
                </a>
                <br>
                <a href="https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <i class="fab fa-twitter"></i> Share on Twitter
                </a>
                <br>
                <a href="https://www.linkedin.com/shareArticle?url=${encodeURIComponent(url)}" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <i class="fab fa-linkedin"></i> Share on LinkedIn
                </a>
                <br>
                <div class="input-group mt-2">
                    <input type="text" class="form-control" value="${url}" id="share-url">
                    <button class="btn btn-secondary copy-button">Copy</button>
                </div>
        `,
                    showCancelButton: true,
                    cancelButtonText: 'Close',
                    showConfirmButton: false,
                });

                const copyButton = document.querySelector('.copy-button');
                copyButton.addEventListener('click', function() {
                    const shareUrlInput = document.getElementById('share-url');
                    shareUrlInput.select();
                    document.execCommand('copy');
                    Swal.fire({
                        icon: 'success',
                        title: 'Link Copied',
                        showConfirmButton: false,
                        timer: 1500
                    });
                });
            }
        });
    </script>
@endsection
