const mix = require("laravel-mix");

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

// mix.js("resources/js/app.js", "public/js").postCss(
//     "resources/css/app.css",
//     "public/css",
//     [
//         //
//     ]
// );

mix.copy(
    [
        "./node_modules/bootstrap/dist/css/bootstrap.min.css",
        "./node_modules/font-awesome/css/font-awesome.css",
        "./node_modules/flag-icon-css/css/flag-icon.min.css",
        "./node_modules/jqvmap/dist/jqvmap.min.css",
        "./node_modules/summernote/dist/summernote-bs4.min.css",
        "./node_modules/owl.carousel/dist/assets/owl.carousel.min.css",
        "./node_modules/owl.carousel/dist/assets/owl.theme.default.min.css",
        "./node_modules/flag-icon-css/css/flag-icon.css",
        "./node_modules/weathericons/css/weather-icons.min.css",
        "./node_modules/weathericons/css/weather-icons-wind.min.css",
    ],
    "public/css/library"
);

mix.copy("./node_modules/flag-icon-css/flags", "public/css/flags");
mix.copy("./node_modules//summernote/dist/font", "public/css/library/font");

mix.copy(
    [
        "./node_modules/jquery/dist/jquery.min.js",
        "./node_modules/bootstrap/dist/js/bootstrap.min.js",
        "./node_modules/bootstrap/dist/js/bootstrap.min.js.map",
        "./node_modules/popper.js/dist/umd/popper.js",
        "./node_modules/popper.js/dist/umd/popper.js.map",
        "./node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js",
        "./node_modules/tooltip.js/dist/umd/tooltip.min.js",
        "./node_modules/tooltip.js/dist/umd/tooltip.min.js.map",
        "./node_modules/moment/min/moment.min.js",
        "./node_modules/moment/min/moment.min.js.map",
        "./node_modules/jquery-sparkline/jquery.sparkline.min.js",
        "./node_modules/summernote/dist/summernote-bs4.js",
        "./node_modules/summernote/dist/summernote-bs4.js.map",
        "./node_modules/chocolat/dist/js/jquery.chocolat.min.js",
        "./node_modules/chart.js/dist/Chart.min.js",
        "./node_modules/owl.carousel/dist/owl.carousel.min.js",
        "./node_modules/simpleweather/jquery.simpleWeather.min.js",
        "./node_modules/jqvmap/dist/jquery.vmap.min.js",
        "./node_modules/jqvmap/dist/maps/jquery.vmap.world.js",
    ],
    "public/js/library"
);
