@extends('Frontend_Common.main')
@section('main')
    <div class="container" style="margin-bottom:20px;">
        <h2 class="text-center">Payment Page</h2>
        <p class="text-center">Please carefully fillup the Pagment details and re-check before submit.</p>
        <div class="row">
            <div class="card col-md-6 col-lg-6 col-12 m-3" style="background-color:rgba(126, 201, 201, 0.497);">
                <div class="card-body">
                    <form method="post" action="{{ route('packages.store') }}" id="myForm">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="package_name" class="form-label">Package:</label>
                            <select class="form-select" name="package_name" required>
                                <option value="">Select a Package</option>
                                <option value="1 month">1 month | 200 tk</option>
                                <option value="3 month">3 months | 500 tk</option>
                                <option value="6 month">6 months | 1000 tk</option>
                                <option value="12 month">12 months | 1800 tk</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount:</label>
                            <select class="form-select" name="amount" required>
                                <option value="">Select Paid Amount</option>
                                <option value="200">200 tk</option>
                                <option value="500">500 tk</option>
                                <option value="1000">1000 tk</option>
                                <option value="1800">1800 tk</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number:</label>
                            <input type="text" class="form-control" name="phone_number" required>
                        </div>

                        <div class="mb-3">
                            <label for="payment_type" class="form-label">Payment Method:</label>
                            <select class="form-select" name="payment_type" required>
                                <option value="">Select Payment Method</option>
                                <option value="bkash">Bkash</option>
                                <option value="nogod">Nogod</option>
                                <option value="rocket">Rocket</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="trxID" class="form-label">Transaction ID:</label>
                            <input type="text" class="form-control" name="trxID" required>
                        </div>
                        @auth
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary mt-3" onclick="submitForm()">Payment</button>
                            </div>
                        @else
                            <div class="col text-center">
                                <a class="btn btn-sm mt-3" href="{{ route('register') }}">Payment</a>
                            </div>
                        @endauth

                    </form>
                </div>
            </div>

            <div class="card col-md-6 col-lg-6 col-12 m-3" style="background-color:rgba(126, 201, 201, 0.497);"
                id="paymentDetailsCard">
                <h4 class="card-title text-center" style="margin: 10px;">Payment details</h4>

                <div class="mb-3">
                    <label for="payment_type" class="form-label">Select a method to know how to Payment.</label>
                    <select class="form-select" name="payment_type" required>
                        <option value="">Select Payment Method</option>
                        <option value="bkash">Bkash</option>
                        <option value="nogod">Nogod</option>
                        <option value="rocket">Rocket</option>
                    </select>
                </div>

                <div id="bkashDetails" class="payment-method-details">
                    <!-- Content for bKash payment method -->
                    <p>bKash details go here...</p>
                </div>

                <div id="nogodDetails" class="payment-method-details">
                    <!-- Content for Nogod payment method -->
                    <p>Nogod details go here...</p>
                </div>

                <div id="rocketDetails" class="payment-method-details">
                    <!-- Content for Rocket payment method -->
                    <p>Rocket details go here...</p>
                </div>
            </div>
        </div>


        <!-- Include jQuery -->
        <!-- Add this to your HTML head section -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                // Initially hide all payment method details divs
                $(".payment-method-details").hide();

                // When the payment method is changed, show the corresponding details div
                $("select[name='payment_type']").change(function() {
                    var selectedPaymentMethod = $(this).val();

                    // Hide all payment method details divs
                    $(".payment-method-details").hide();

                    // Show the details div for the selected payment method
                    $("#" + selectedPaymentMethod + "Details").show();
                });
            });
        </script>

        <script>
            function submitForm() {
                const form = document.getElementById('myForm');

                fetch(form.action, {
                        method: 'POST',
                        body: new FormData(form),
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                title: 'Thank You!',
                                text: 'Your Payment request has been submitted successfully. Request approved in 10 Minutes. If not contact 01742214639',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                            setTimeout(() => {
                                window.location.href = '/';
                            }, 10000);
                        } else {
                            console.error('Form submission failed:', data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error during form submission:', error);
                    });
            }
        </script>
    </div>
@endsection
