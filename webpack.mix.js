const mix = require('laravel-mix');

var nodePath = './node_modules/';
var publicPath = './public/';
var assetsPath = './resources/assets/';
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

mix.sass('resources/sass/app.scss', 'public/css/styles.css')
    .combine([
        publicPath+'css/styles.css',
        nodePath+'datatables.net-dt/css/jquery.dataTables.min.css'
    ],publicPath+'css/app.css')
    .autoload({ 'jquery': ['window.$', 'window.jQuery'] })
    .scripts([
        nodePath+'datatables.net/js/jquery.dataTables.min.js',
        nodePath+'datatables.net-dt/js/dataTables.dataTables.min.js',
    ],publicPath+'js/app.js')
    .version();
