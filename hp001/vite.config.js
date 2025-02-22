import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/sass/app.scss',
                'resources/sass/business.scss',
                'resources/sass/company.scss',
                'resources/sass/contact.scss',
                'resources/sass/fulltime.scss',
                'resources/sass/mobile.scss',
                'resources/sass/parttime.scss',
                'resources/sass/pest.scss',
                'resources/sass/recruit.scss',
                'resources/sass/selfemployed.scss',
                'resources/sass/ses.scss'
            
            ],
            refresh: true,
        }),
    ],
     // ↓↓　WSL使用時のみ必要なコード　↓↓
     server: {
        hmr: {
            host: 'localhost'
        }
    }
    // ↑↑　WSL使用時のみ必要なコード　↑↑
});
