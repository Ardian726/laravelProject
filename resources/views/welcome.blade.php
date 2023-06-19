<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('assets/dist/css/tabler.min.css') }}" rel="stylesheet" />

    @livewireStyles
</head>

<body>
    <div class="page">
        <!-- Navbar -->
        <div class="page-wrapper page-center">
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl d-flex flex-column justify-content-center">
                    <div class="empty">
                        <div class="empty-img">
                            <img src="{{ asset('assets/static/cs.svg') }}" height="128"
                                alt="" />
                        </div>
                        <p class="h1">Let's Start</p>
                        <p class="empty-subtitle text-muted">
                            If you want to use this application, lest login or signup before.
                        </p>
                        <div class="empty-action">
                            <a href="{{ route('login') }}" class="btn btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-location"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5">
                                    </path>
                                </svg>
                                Get Stared
                            </a>
                        </div>
                        <div class="mt-1 small text-muted pt-5">ARDIAN</div>
                    </div>
                </div>
            </div>
        </div>
        @include('template.inc.footer')
    </div>
    <script src="{{ asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/demo.min.js') }}" defer></script>
    @livewireScripts
</body>

</html>
