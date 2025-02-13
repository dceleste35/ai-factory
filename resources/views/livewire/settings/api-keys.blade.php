<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('API Keys') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Manage your API keys.') }}
        </p>
    </header>

    <form class="mt-6 space-y-6" wire:submit.prevent="createApiKey">
        <div class="flex justify-between space-x-4">
            <flux:select class="w-10" variant="listbox" searchable placeholder="Select LLM" wire:model="llm">
                <flux:option>
                    <div class="flex items-center gap-2">
                        <flux:icon.shield-check class="text-zinc-400" variant="mini" />
                        Owner
                    </div>
                </flux:option>
            </flux:select>
            <flux:input wire:model="apiKey" placeholder="Entrez votre clé API..." />
        </div>

        <div class="flex h-full items-end">
            <flux:button type="submit" variant="primary">
                {{ __('Create') }}
            </flux:button>
        </div>
    </form>

    <div class="mt-6">
        <div
            class="overflow-hidden border border-zinc-200 border-b-zinc-300/80 bg-white shadow-sm ring-slate-50 disabled:border-b-zinc-200 sm:rounded-xl dark:border-white/10 dark:bg-white/10 dark:shadow-none dark:disabled:border-white/5"
        >
            <ul class="divide-y divide-gray-200 dark:divide-white/10" role="list">
                @foreach ($apiKeys as $apiKey)
                    <li wire:key="{{ $apiKey['id'] }}">
                        <div class="block">
                            <div class="items -center flex justify-between px-4 py-2 sm:px-6">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                        {{ $apiKey['name'] }}
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <flux:button variant="ghost" wire:click="deleteApiKey('{{ $apiKey['id'] }}')">
                                        {{ __('Delete') }}
                                    </flux:button>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
