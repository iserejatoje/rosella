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