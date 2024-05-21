let mix = require('laravel-mix');

const path = require('path');
let directory = path.basename(path.resolve(__dirname));

const source = 'platform/themes/' + directory;
const dist = 'public/themes/' + directory;

mix
    .sass(source + '/assets/sass/rtl-style.scss', dist + '/css')
    .sass(source + '/assets/sass/style.scss', dist + '/css')
    .sass(source + '/assets/sass/account.scss', dist + '/css')
    .sass(source + '/assets/sass/error-pages.scss', dist + '/css')

    .js(source + '/assets/js/app.js', dist + '/js')
    .js(source + '/assets/js/wishlist.js', dist + '/js')
    .js(source + '/assets/js/property.js', dist + '/js')
    .js(source + '/assets/js/icons-field.js', dist + '/js')
    .js(source + '/assets/js/review.js', dist + '/js')

    .copyDirectory(dist + '/css', source + '/public/css')
    .copyDirectory(dist + '/js', source + '/public/js');
