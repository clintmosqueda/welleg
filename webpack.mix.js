// webpack.mix.js
let mix = require('laravel-mix');

mix
.options({
  processCssUrls: false
})
.sass('src/scss/app.scss', 'wp-content/themes/welleg/assets/css/')
.js('src/js/app.js', 'wp-content/themes/welleg/assets/js/')
.copyDirectory('src/images/', 'wp-content/themes/welleg/assets/images/');

mix.browserSync({
  proxy: 'localhost:8888',
});