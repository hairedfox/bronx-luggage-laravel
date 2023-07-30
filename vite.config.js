import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import mkcert from 'vite-plugin-mkcert'

export default defineConfig({
    server: { https: true },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/plugins.css',
                'resources/js/app.js',
                'resources/js/plugins.js',
                'resources/css/style.css',
                'resources/img/s-product/product.jpg',
                'resources/img/s-product/product2.jpg',
                'resources/img/favicon.ico',
                'resources/img/logo/logo-no-background.svg',
                'resources/img/about/newsletter-icon.png',
                'resources/img/icon/payment.png'
            ],
            refresh: true,
        }),
        mkcert(),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*'
                    })
                }
            }
        }
    ],
});
