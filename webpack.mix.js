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
  proxy: 'http://localhost:8888/welleg/',
  files: ["wp-content/**/*.css", "wp-content/**/*.php", "wp-content/**/*.js"],
});