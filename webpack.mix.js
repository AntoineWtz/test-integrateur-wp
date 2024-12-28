let mix = require('laravel-mix');

mix.copyDirectory('assets/fonts', 'dist/fonts');

mix.sass('style.scss', 'style.css')
    .options({
        postCss: [
            require('tailwindcss')
        ],
    });

