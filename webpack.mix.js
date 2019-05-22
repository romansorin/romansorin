const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.react('resources/js/app.js', 'public/js')
   .js('resources/js/hotjar.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('./node_modules/animate.css/animate.min.css', 'public/css')