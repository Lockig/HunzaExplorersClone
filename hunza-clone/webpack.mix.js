let mix = require('laravel-mix');

//images
mix.copyDirectory('resources/assets/images','public/assets/images').version();

//css
mix.sass('resources/sass/app.scss','public/assets/css/app.css').version();
mix.sass('resources/sass/layout/layout.scss','public/assets/css/layout.css').version();
// mix.styles('resources/css/app.css','public/assets/css/app.css').version();

//component
mix.sass('resources/sass/component/message.scss','public/assets/css/component/home/message.css').version();
mix.sass('resources/sass/component/contact-us.scss','public/assets/css/component/home/contact-us.css').version();
mix.sass('resources/sass/component/home/home.scss','public/assets/css/component/home/home.css').version();

//js
mix.js([
    'node_modules/jquery/dist/jquery.js',
    'resources/js/bootstrap.js',
    'resources/js/app.js',
],'public/assets/js/app.js').version();

mix.js('resources/js/component/home/home.js','public/assets/js/home.js').version();

// mix.js('node_modules/owl.carousel/dist/owl.carousel.min.js','').version();

//font-awesome
mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts','public/assets/fonts');
