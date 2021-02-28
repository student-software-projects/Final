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

/*
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/
mix.styles([
    'resources/adminlte/css/bootstrap.min.css',
    'resources/adminlte/css/font-awesome.min.css',
    'resources/adminlte/css/ionicons.min.css',
    'resources/adminlte/css/jquery-jvectormap.css',
    'resources/adminlte/css/AdminLTE.min.css',
    'resources/adminlte/css/_all-skins.min.css',
    'resources/adminlte/css/login.min.css',
],'public/css/app.css')
    .scripts([
        'resources/adminlte/js/jquery.min.js',
        'resources/adminlte/js/bootstrap.min.js',
        'resources/adminlte/js/fastclick.js',
        'resources/adminlte/js/adminlte.min.js',
        'resources/adminlte/js/jquery.sparkline.min.js',
        'resources/adminlte/js/jquery-jvectormap-1.2.2.min.js',
        'resources/adminlte/js/jquery-jvectormap-world-mill-en.js',
        'resources/adminlte/js/jquery.slimscroll.min.js',
        'resources/adminlte/js/Chart.js',
        'resources/adminlte/js/dashboard2.js',
        'resources/adminlte/js/demo.js',
        'resources/adminlte/js/login.min.js',
    ],'public/js/app.js');


