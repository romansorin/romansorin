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
    <script src="{{ asset('js/hotjar.js') }}"></script>
</head>

<body>
    <div id="app">
        @include('layouts.header')
        @yield('content')
        {{-- @include('layouts.footer') --}}
    </div>
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/feather.js') }}"></script>
</body>

</html>
