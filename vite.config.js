import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/main.js',
                'resources/js/plugins.js',
                'resources/js/bootstrap.js',
                'resources/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',
        ],
            refresh: true,
        }),
    ],
});
