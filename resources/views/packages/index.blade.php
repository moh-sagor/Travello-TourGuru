@if (Auth::user()->role == 'superadmin')
    @extends('Backend.main')
    @section('backend_main')
        <div class="container-fluid px-4 mt-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Information about who purchage a package.
                </div>

                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Package Name</th>
                                <th>Amount</th>
                                <th>Phone Number</th>
                                <th>TrxID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Package Name</th>
                                <th>Amount</th>
                                <th>Phone Number</th>
                                <th>TrxID</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $sn = 1;
                            @endphp
                            @foreach ($packages as $package)
                                <tr>
                                    <td>{{ $sn++ }}</td>
                                    <td>{{ $package->name }}</td>
                                    <td>{{ optional($package->user)->email }}</td>
                                    <td>{{ $package->package_name }}</td>
                                    <td>{{ (int) $package->amount }} TK</td>
                                    <td>{{ $package->phone_number }}</td>
                                    <td>{{ $package->trxID }}</td>
                                    <td>
                                        @if ($package->status == 'unread')
                                            <button class="btn btn-danger" onclick="markAsRead({{ $package->id }})">Mark as
                                                Checked</button>
                                        @else
                                            <span class="text-success">Checked</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            function markAsRead(packageId) {
                fetch(`/mark-as-read/${packageId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            location.reload(true);

                        } else {
                            alert('Failed to mark as read.');
                        }
                    })
                    .catch(error => {
                        console.error('Error marking as read:', error);
                    });
            }
        </script>
    @endsection
@else
    <script>
        window.location.href = '{{ url('/') }}';
    </script>

@endif
