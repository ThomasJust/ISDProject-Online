var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
        .sass('app.scss')
        .scripts([
            '../../assets/bower/jquery/dist/jquery.min.js',
            '../../assets/bower/bootstrap-sass/assets/javascripts/bootstrap.min.js'
        ], 'public/js/vendor.js')
        .copy(
            'resources/assets/bower/bootstrap-sass/assets/fonts/bootstrap',
            'public/fonts/bootstrap'
        )
    ;
});
