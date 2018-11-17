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

mix.js(['node_modules/masonry-layout/dist/masonry.pkgd.min.js', 'node_modules/jquery/dist/jquery.min.js', 'resources/js/front/front.js', 'resources/js/admin/admin.js', 'resources/js/app.js'], 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
