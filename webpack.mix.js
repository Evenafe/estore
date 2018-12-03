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
    .sass('resources/sass/admin/app.scss', 'public/css/admin')
    .sass('resources/sass/store/app.scss', 'public/css/store')
    .js('resources/js/admin/wares.js', 'public/js/admin')
    .js('resources/js/admin/app.js', 'public/js/admin')
    .js('resources/js/admin/slider.js', 'public/js/admin');
