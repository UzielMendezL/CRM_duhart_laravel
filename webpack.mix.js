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

  mix.js('resources/js/app.js', 'public/assets/js/argon-dashboard.js')
  .sass('resources/scss/argon-dashboard.scss', 'public/assets/css/argon-dashboard.css', [
      //
  ]);
//  mix.config.publicPath='public_html';
//  mix.js('resources/assets/js/app.js', 'public_html/js')
//    .sass('resources/assets/sass/app.scss', 'public_html/css');