<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('stylesheets')  
    </head>
    <body>
    	@include('layouts.header')
    	<div id="app">
        @yield('content')
        </div>
        @include('layouts.footer')
        @yield('scripts')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>