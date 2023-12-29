@extends('Backend.main')
@section('backend_main')
    <div class="container-fluid px-4 mt-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage all users
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>UserName</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Update Role</th>
                            <th>Duration</th>
                            <th>Subscription</th>
                            <th>Update Duration</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>S.N</th>
                            <th>UserName</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Update Role</th>
                            <th>Duration</th>
                            <th>Subscription</th>
                            <th>Update Duration</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $sn = 1;
                            $subscriptionDurations = ['0 month', '1 month', '3 months', '6 months', '12 months'];
                        @endphp
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    @if (auth()->user()->isSuperAdmin())
                                        <form class="d-flex" method="POST" action="{{ route('users.update-role', $user) }}">
                                            @csrf
                                            <select name="role" id="role" class="form-select me-2">
                                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>
                                                    Admin</option>
                                                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>
                                                    User</option>
                                            </select>
                                            <button class="btn btn-primary btn-sm" type="submit">Update</button>
                                        </form>
                                    @endif
                                </td>
                                <td>
                                    {{ $user->duration }}
                                </td>
                                <td>
                                    <div class="countdown" data-duration="{{ $user->duration }}"
                                        id="countdown_{{ $user->id }}"></div>
                                </td>
                                <td>
                                    <form class="d-flex" method="POST"
                                        action="{{ route('users.update-subscription', $user) }}">
                                        @csrf
                                        <select name="duration" id="duration_{{ $user->id }}" class="form-select me-2"
                                            onchange="initializeCountdown(this.value, {{ $user->id }})">
                                            @foreach ($subscriptionDurations as $duration)
                                                <option value="{{ $duration }}"
                                                    {{ $user->duration === $duration ? 'selected' : '' }}>
                                                    {{ $duration }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-primary btn-sm" type="submit">Update Duration</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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

        @foreach ($users as $user)
            initializeCountdown('{{ $user->duration }}', {{ $user->id }}, '{{ $user->countdown_end_time }}');
        @endforeach

        // Update the countdown when the duration is changed
        function updateCountdownOnDurationChange(userId, newDuration) {
            var storedEndTime = localStorage.getItem('countdown_end_time_' + userId);
            initializeCountdown(newDuration, userId, storedEndTime);
        }
    </script>
@endsection
