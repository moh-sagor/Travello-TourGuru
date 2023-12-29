<!DOCTYPE html>
<html lang="en">

<head>
    {{-- header --}}
    @include('Backend.header')
</head>

<body class="sb-nav-fixed">
    {{-- navbar  --}}
    @include('Backend.navbar')


    <div id="layoutSidenav">
        {{-- sidenavbar  --}}
        @include('Backend.sidenavbar')

        <div id="layoutSidenav_content">
            <main>
                @yield('backend_main')
            </main>

            {{-- footer  --}}
            @include('Backend.footer')
        </div>
    </div>

    {{-- script  --}}
    @include('Backend.script')
</body>

</html>
