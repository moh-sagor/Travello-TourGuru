@extends('Backend.main')
@section('backend_main')
    <div class="container">
        <h3>Hi, {{ $user->name }}</h3>
        @if ($user->role === 'superadmin' || $user->role === 'admin')
            <a class="btn btn-primary btn-sm" href="{{ route('user.profile', $user->username) }}">View Your Website</a>
        @else
            <span class="btn btn-sm btn-danger">You are not able to view your web page. Must subscribe a package. </span>
        @endif

    </div>
@endsection
