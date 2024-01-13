@section('favicon')
    {{ asset(optional($user->sitemap)->image) }}
@endsection
