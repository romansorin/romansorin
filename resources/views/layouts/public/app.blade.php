<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') Roman Sorin ~ Software Developer</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('stylesheets')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141358938-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-141358938-1');
    </script>
</head>

<body>
    <div id="app">
        @include('layouts.header')
        @yield('content')
        {{-- @include('layouts.footer') --}}
    </div>
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>