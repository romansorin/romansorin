const mix = require('laravel-mix');
mix.disableSuccessNotifications();

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
