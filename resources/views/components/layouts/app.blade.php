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
    <body class="min-h-screen bg-white text-zinc-800 dark:!bg-zinc-900">
        <x-header />

        <flux:main>
            @if (isset($title))
                <flux:heading size="xl" level="1">{{ __($title) }}</flux:heading>
            @endif

            @if (isset($subHeading))
                <flux:subheading class="mb-6" size="lg">{{ $subHeading }}</flux:subheading>
                <flux:separator variant="subtle" />
            @elseif (isset($title))
                <flux:separator class="mt-6" variant="subtle" />
            @endif

            {{ $slot }}
        </flux:main>

        @livewireScripts
        @vite('resources/js/app.js')
        @fluxScripts
        @stack('scripts')
    </body>
</html>
