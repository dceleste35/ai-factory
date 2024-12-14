import defaultTheme from 'tailwindcss/defaultTheme'
import aspectRatio from '@tailwindcss/aspect-ratio'
import containerQueries from '@tailwindcss/container-queries'

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'selector',
    plugins: [aspectRatio, containerQueries],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/livewire/flux-pro/stubs/**/*.blade.php',
        './vendor/livewire/flux/stubs/**/*.blade.php'
    ],
    theme: {
        fontFamily: {
            sans: ['Inter', 'sans-serif']
        }
    },
    plugins: []
}
