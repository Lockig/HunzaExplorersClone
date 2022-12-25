let mix = require('laravel-mix');

//images
mix.copyDirectory('resources/assets/images','public/assets/images').version();

//css
mix.sass('resources/sass/app.scss','public/assets/css/bootstrap.css').version();
mix.styles('resources/css/app.css','public/assets/css/app.css').version();


//js
mix.js('resources/js/app.js','public/assets/js/app.js').version();
// mix.js('node_modules/owl.carousel/dist/owl.carousel.min.js','').version();

//font-awesome
mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts','public/assets/fonts');
