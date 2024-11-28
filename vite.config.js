import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app.js", "resources/js/calc.js", "resources/css/app.css"],

            refresh: true,
        }),
    ],

    server: {
        port: 3100, // or any other available port
    },
});
