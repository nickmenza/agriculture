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

mix.js('resources/js/app.js', 'public/js')
        .sass('resources/sass/font.scss', 'public/css')
        .sass('resources/sass/home.scss', 'public/css')
        .sass('resources/sass/contact.scss', 'public/css')
        .sass('resources/sass/about-us.scss', 'public/css')
        .sass('resources/sass/main.scss', 'public/css');
   
