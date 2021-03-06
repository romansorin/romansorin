<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="Roman Sorin is a full-stack software developer who builds, designs, and engineers custom solutions for businesses of all sizes.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Roman Sorin ~ Software Developer</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
    <noscript>Javascript is required to use this site.</noscript>
    <div id="app">
        <welcome-component></welcome-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>