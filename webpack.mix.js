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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles('resources/assets/css/pedidos.css', 'public/css/styles.css')
   .styles('resources/assets/css/evento.eventos.css', 'public/css/evento.eventos.css')
   .styles('resources/assets/css/consumidor.escreverEmail.css', 'public/css/consumidor.escreverEmail.css')
   .styles('resources/assets/css/consumidor.consumidores.css','public/css/consumidor.consumidores.css')
   .styles('resources/assets/css/footer-relative.css', 'public/css/footer-relative.css');
