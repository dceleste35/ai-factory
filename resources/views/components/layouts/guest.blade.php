<x-layouts.app>
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
                    <x-heroicon-s-moon class="h-8 w-8" />
                </a>
            </div>

            <div class="hidden dark:block">
                <a href="/" wire:navigate>
                    <x-heroicon-s-moon class="h-8 w-8" />
                </a>
            </div>
        </div>

        <flux:card class="mt-6 w-full px-6 py-4 sm:max-w-md">
            {{ $slot }}
        </flux:card>
    </div>
</x-layouts.app>
