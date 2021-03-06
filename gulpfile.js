var elixir = require('laravel-elixir'); 

require('laravel-elixir-vueify');
require('laravel-elixir-stylus');

elixir(function(mix) {
    mix.sass('app.scss')
    	.stylus('app.styl')
    	.version('css/app.css')
    	.scripts([
    		'./node_modules/sweetalert/dist/sweetalert.min.js'
    		],'./public/js/libs.js')
    	.styles([
    		'./node_modules/sweetalert/dist/sweetalert.css'
    		],'./public/css/libs.css')
    	.browserify('app.js');

});
