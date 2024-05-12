import autoprefixer from "autoprefixer"
import {defineConfig} from "vite"
import {resolve} from 'path'

export default defineConfig({
    base: '',
    build: {
        // outDir: '../wp-content/..',
        outDir: '../docs',
        rollupOptions: {
            input: {
                services: resolve(__dirname, 'services.html'),
                faq: resolve(__dirname, 'faq.html'),
                privacy_policy: resolve(__dirname, 'privacy-policy.html'),
                blog: resolve(__dirname, 'blog.html'),
                service: resolve(__dirname, 'service.html'),
                cart: resolve(__dirname, 'cart.html'),
                contact_us: resolve(__dirname, 'contact-us.html'),
                product: resolve(__dirname, 'product.html'),
                article: resolve(__dirname, 'article.html'),
                shop: resolve(__dirname, 'shop.html'),
            },
            output: {
                assetFileNames: (assetInfo) => {
                    let extType = assetInfo.name.split('.').at(1);
                    if (/png|jpe?g|svg|gif|tiff|bmp|ico/i.test(extType)) {
                        extType = 'img';
                    }
                    return `assets/${extType}/[name][extname]`;
                },
                chunkFileNames: 'assets/js/[name].js',
                entryFileNames: 'assets/js/[name].js',
            },
        },
        css: {
            postcss: {
                plugins: [
                    autoprefixer()
                ],
                sourceMap: true
            },
        },
    }
})