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

elixir.config.sourcemaps = false;

elixir(function(mix) {
	mix.browserSync();

	mix.sass('app.scss')
		.styles([
			'resources/assets/css/bootstrap.css',
			'resources/assets/css/clean-blog.css',
			'public/css/app.css'
		], 'public/css/style.css', './');

	mix.scripts([
		'jquery.js',
		'bootstrap.js',
		'clean-blog.js',
		"app.js"
	], 'public/js/app.js');

	mix.version(['public/css/style.css', 'public/js/app.js'])

});
