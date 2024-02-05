const mix = require('laravel-mix');

mix.js('resources/js/script.js', 'public/js/app.js')
    .js("node_modules/bootstrap/dist/js/bootstrap.bundle.js", "public/js/bootstrap.min.js")
    .sass('resources/css/style.scss', 'public/css/style.css')