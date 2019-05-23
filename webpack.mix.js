const mix = require('laravel-mix');

mix.react('resources/js/app.js', 'public/js')
   .js('resources/js/hotjar.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('./node_modules/animate.css/animate.min.css', 'public/css')