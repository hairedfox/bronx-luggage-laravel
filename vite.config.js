import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import * as path from 'path';

export default defineConfig({
    server: { https: true },
    root: __dirname,
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/plugins.css',
                'resources/js/app.js',
                'resources/js/plugins.js',
                'resources/css/style.css',
                'resources/css/dashboard.css',
                'resources/js/dashboard.js'
            ],
            refresh: true,
        })
    ],
});
