@section('meta_title')
    {{ optional($event)->name }} | {{ optional($event->user->sitemap)->sitename }}
@endsection
@section('meta_description')
    {{ Str::limit($event->description, 150) }}
@endsection
