@section('meta_title')
    {{ $event->name }} | {{ $event->user->sitemap->sitename }}
@endsection
@section('meta_description')
    {{ Str::limit($event->description, 150) }}
@endsection
