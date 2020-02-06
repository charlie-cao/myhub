let mix = require('laravel-mix');

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
mix.browserSync('http://localhost:8888/laravel_admin/public/');

mix.js('resources/assets/js/app.js', 'public/js');
mix.js('resources/assets/js/app2.js', 'public/js');

mix.js('resources/assets/js/music.js', 'public/js');

mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.js('resources/assets/js/app-angular.js', 'public/js');
