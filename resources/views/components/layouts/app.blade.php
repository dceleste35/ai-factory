<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="https://fonts.bunny.net" rel="preconnect" />
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        @livewireStyles
        @fluxStyles
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <x-header />

        <flux:main class="!py-0">
            {{ $slot }}
        </flux:main>

        @livewireScripts
        @vite('resources/js/app.js')
        @fluxScripts
        @stack('scripts')
    </body>
</html>
