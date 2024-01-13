<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{-- meta details  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="@yield('meta_title')">
    <meta name="description" content="@yield('meta_description')">
    <link rel="shortcut icon" type="image/x-icon" href="@yield('favicon')">
    <title> @yield('meta_title')</title>
    {{-- css link  --}}
    @include('Frontend_client.link')
</head>

<body>
    <header>
        {{-- header  --}}
        @include('Frontend_client.header')
    </header>

    <main>

        @yield('main')

    </main>


    <footer>
        {{-- footer  --}}
        @include('Frontend_client.footer')
    </footer>

    <div id="back-top">
        <a title="Go to Top" href="index.html#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    {{-- script  --}}
    @include('Frontend_client.script')

</body>

</html>
