const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/assets/default/js')
    .sass('resources/css/app.scss', 'public/assets/default/css')