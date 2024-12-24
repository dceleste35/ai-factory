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
    <body class="min-h-screen bg-white text-zinc-800 antialiased dark:!bg-zinc-900">
        <div class="fixed right-0 top-0 z-50 p-4">
            <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                <flux:radio value="light" icon="sun" />
                <flux:radio value="dark" icon="moon" />
                <flux:radio value="system" icon="computer-desktop" />
            </flux:radio.group>
        </div>

        <div class="flex min-h-screen flex-col items-center bg-zinc-50 pt-6 sm:justify-center sm:pt-0 dark:bg-zinc-800">
            <div>
                <div class="dark:hidden">
                    <a href="/" wire:navigate>
                        <x-heroicon-o-moon class="h-8 w-8 text-white" />
                    </a>
                </div>

                <div class="hidden dark:block">
                    <a href="/" wire:navigate>
                        <x-heroicon-o-moon class="h-8 w-8 text-white" />
                    </a>
                </div>
            </div>

            <flux:card class="mt-6 w-full px-6 py-4 sm:max-w-md">
                {{ $slot }}
            </flux:card>
        </div>

        @livewireScripts
        @vite('resources/js/app.js')
        @fluxScripts
        @stack('scripts')
    </body>
</html>
