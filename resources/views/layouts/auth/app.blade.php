<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Change this to an auth specific app --}}
    @yield('stylesheets')
</head>

<body>
    <div id="app">
        {{-- @include('layouts.auth.sidebar') --}}
        {{-- @include('layouts.auth.header') --}}
        @yield('content')
        {{-- @include('layouts.auth.footer') --}}
    </div>
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- Change this to auth specific js --}}
</body>

</html>
