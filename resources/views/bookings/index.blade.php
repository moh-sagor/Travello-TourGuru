@extends('Backend.main')
@section('backend_main')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="container-fluid px-4 mt-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Information about who Booking a tour package.
            </div>

            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Taka</th>
                            <th>Payment Method</th>
                            <th>Phone Number</th>
                            <th>Person</th>
                            <th>Transaction ID</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Taka</th>
                            <th>Payment Method</th>
                            <th>Phone Number</th>
                            <th>Person</th>
                            <th>Transaction ID</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $sn = 1;
                        @endphp
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->taka }}</td>
                                <td>{{ $booking->payment_method }}</td>
                                <td>{{ $booking->phone_number }}</td>
                                <td>{{ $booking->person }}</td>
                                <td>{{ $booking->trxID }}</td>
                                <td>
                                    @if ($booking->status == 'pending')
                                        <form method="POST" action="{{ route('bookings.updateStatus', $booking->id) }}"
                                            style="display: inline;">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-sm btn-danger">Pending</button>
                                        </form>
                                    @else
                                        <button type="submit" class="btn btn-sm btn-success">Accepted</button>
                                    @endif

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
