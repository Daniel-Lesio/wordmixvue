const mix = require('laravel-mix');

mix
.js( 'src/js/app.js', 'dist/js/app.js')
.sass( 'src/scss/app.scss', 'dist/css/app.css')
// .copyDirectory('src/img', 'public/img')
.options({
    processCssUrls: false,
})

.browserSync('localhost/wordpress')
