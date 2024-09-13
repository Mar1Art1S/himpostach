import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app.js", "resources/css/app.css"],

            refresh: true,
        }),
    ],

    server: {
        port: 9800, // or any other available port
    },
});
