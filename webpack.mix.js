const mix = require('laravel-mix');

mix.scripts([
    'resources/js/jquery.min.js',
    'resources/js/bootstrap.bundle.min.js',
    'resources/js/datatables.min.js',
    'resources/js/jquery.fancybox.min.js',
    'resources/js/upload.js',
    'resources/js/teammate.js',
    'resources/js/category.js',
    'resources/js/gallery.js',
    'resources/js/post.js',
    'resources/js/app.js',
],  'public/js/app.js');


mix.styles([
    'resources/css/bootstrap-rtl.min.css',
    'resources/css/bootstrap-extension.min.css',
    'resources/css/jquery.fancybox.min.css',
    'resources/css/app.css',
],  'public/css/app.css');


mix.styles([
    'resources/css/bootstrap-rtl.min.css',
    'resources/css/bootstrap-extension.min.css',
    'resources/css/jquery.fancybox.min.css',
    'resources/css/datatables.min.css',
    'resources/css/admin-app.css',
],  'public/css/admin.css');