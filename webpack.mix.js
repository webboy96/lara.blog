const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/assets/admin/css/adminlte.min.css',
    'resources/assets/admin/plugins/select2/css/select2.css',
    'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.css',
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
], 'public/assets/admin/css/admin.css');

mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/plugins/select2/js/select2.full.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/demo.js',
    'resources/assets/admin/js/bs-custom-file-input.min.js',
], 'public/assets/admin/js/admin.js');

mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/assets/admin/webfonts');
mix.copyDirectory('resources/assets/admin/img', 'public/assets/admin/img');
mix.copy('resources/assets/admin/css/adminlte.min.css.map', 'public/assets/admin/css/adminlte.min.css.map');

/*
Front
 */
mix.styles([
    'resources/assets/front/css/bootstrap.min.css',
    'resources/assets/front/css/all.min.css',
    'resources/assets/front/font/flaticon.css',
    'resources/assets/front/css/animate.min.css',
    'resources/assets/front/css/aos.css',
    'resources/assets/front/css/owl.carousel.min.css',
    'resources/assets/front/css/jquery.fancybox.min.css',
    'resources/assets/front/css/style.css',
    'resources/assets/front/css/responsive.css',


], 'public/assets/front/css/style.css');

mix.scripts([
    'resources/assets/front/js/jquery/jquery-3.5.1.min.js',
    'resources/assets/front/js/bootstrap/popper.min.js',
    'resources/assets/front/js/bootstrap/bootstrap.min.js',
    'resources/assets/front/js/plugins/plugins.min.js',
    'resources/assets/front/js/active.js',

], 'public/assets/front/js/front.js');

