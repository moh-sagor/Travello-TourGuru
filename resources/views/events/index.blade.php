@if (Auth::user()->role === 'superadmin' || Auth::user()->role === 'admin')
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
                                <th>Event Place</th>
                                <th>Event amount</th>
                                <th>Event Date</th>
                                <th>Event Duration</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N</th>
                                <th>Event Place</th>
                                <th>Event amount</th>
                                <th>Event Date</th>
                                <th>Event Duration</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $sn = 1;
                            @endphp
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $sn++ }}</td>
                                    <td><a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a></td>
                                    <td>{{ (int) $event->taka }}</td>
                                    <td>{{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}</td>
                                    <td>{{ $event->day }}</td>
                                    <td>{{ Str::limit($event->description, 30) }}</td>
                                    <td> <img src="{{ asset($event->image) }}" alt="Event Image"
                                            style="width: 60px; height: 40px;"></td>
                                    <td>
                                        <!-- Edit button with Font Awesome icon -->
                                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>

                                        <!-- Delete button with Font Awesome icon -->
                                        <form action="{{ route('events.destroy', $event->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
@else
    <script>
        window.location.href = '{{ url('/') }}';
    </script>

@endif
