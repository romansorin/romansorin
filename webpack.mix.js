const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/hotjar.js', 'public/js')
    .js('resources/js/feather.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
