const mix = require('laravel-mix');

mix.setPublicPath('public');
mix.setResourceRoot('../');
mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');

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
    .js('resources/js/vue.js', 'public/js')
    .js('resources/js/mychart.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

