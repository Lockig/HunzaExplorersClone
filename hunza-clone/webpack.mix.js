let mix = require('laravel-mix');

//images
mix.copyDirectory('resources/assets/images','public/assets/images').version();

//css
mix.sass('resources/sass/app.scss','public/assets/css/bootstrap.css').version();
mix.styles('resources/css/app.css','public/assets/css/app.css').version();


//js
mix.scripts('resources/js/app.js','public/assets/js/app.js').version();
