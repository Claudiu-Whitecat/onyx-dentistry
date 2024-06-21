import { defineConfig } from 'vite';
import laravel, { refreshPaths }  from 'laravel-vite-plugin';
import {globSync} from "glob";

export default defineConfig({
    plugins: [
        laravel({
            input: globSync("resources/{css,js}/**/*.*", {
                ignore: "resources/js/bootstrap.js",
            }),
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ]
        }),
    ],
});
