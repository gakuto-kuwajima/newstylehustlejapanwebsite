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
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .sass('resources/sass/front.scss', 'public/css')
    .sass('resources/sass/toppage.scss', 'public/css')
    .sass('resources/sass/about.scss', 'public/css')
    .sass('resources/sass/contact.scss', 'public/css')
    .sass('resources/sass/lesson.scss', 'public/css')
    .sass('resources/sass/video.scss', 'public/css')
    .sass('resources/sass/search.scss', 'public/css')
    .sass('resources/sass/indexcommunity.scss', 'public/css')
    .sass('resources/sass/indexnews.scss', 'public/css')
    .sass('resources/sass/privacypolicy.scss', 'public/css');
