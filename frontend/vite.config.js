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