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

//Template dedigital
/*mix
    .js('resources/assets/templates/dedigital/js/app.js', 'public/templates/dedigital/js')
    .sass('resources/assets/templates/dedigital/sass/app.scss', 'public/templates/dedigital/css')
;*/

//Template CoreUI
mix
    .js('resources/assets/templates/coreui/js/app.js', 'public/templates/coreui/js')
    .js('resources/assets/templates/coreui/js/views/main.js', 'public/templates/coreui/js/views')
    //.sass('resources/assets/templates/coreui/sass/style.scss', 'public/templates/coreui/css')
;
