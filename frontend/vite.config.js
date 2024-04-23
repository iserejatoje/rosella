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
                index: resolve(__dirname, 'index.html'),
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