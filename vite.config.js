import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import * as path from 'path';
import inject from "@rollup/plugin-inject";

export default defineConfig({
    server: { https: true, hot: true },
    root: __dirname,
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/css/plugins.css',
                'resources/js/app.js',
                'resources/css/style.css',
                'resources/css/dashboard.css',
                'resources/js/dashboard.js'
            ],
            refresh: true,
        }),
        inject({
            $: 'jquery',
            jQuery: 'jquery'
        })
    ],
});
