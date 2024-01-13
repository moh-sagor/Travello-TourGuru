@section('meta_title')
    {{ optional($sitemap)->sitename }}
@endsection
@section('meta_description')
    {{ optional($sitemap)->about_2 }}
@endsection
