import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: { https: true },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/plugins.css',
                'resources/js/app.js',
                'resources/js/plugins.js',
                'resources/css/style.css'
            ],
            refresh: true,
        })
    ],
});
