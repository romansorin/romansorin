<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') — Roman Sorin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('stylesheets')
    
</head>

<body>
    <div id="app">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Hotjar Tracking Code for https://www.romansorin.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1327317,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
</body>

</html>