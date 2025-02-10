<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form class="mt-6 space-y-6" wire:submit="updatePassword">
        <div>
            <flux:field>
                <flux:label>{{ __('Current Password') }}</flux:label>
                <flux:input type="password" viewable wire:model="current_password" autocomplete="current-password" />
                <flux:error name="current_password" />
            </flux:field>
        </div>

        <div>
            <flux:field>
                <flux:label>{{ __('New Password') }}</flux:label>
                <flux:input type="password" viewable wire:model="password" autocomplete="new-password" />
                <flux:error name="password" />
            </flux:field>
        </div>

        <div>
            <flux:field>
                <flux:label>{{ __('Confirm Password') }}</flux:label>
                <flux:input type="password" viewable wire:model="password_confirmation" autocomplete="new-password" />
                <flux:error name="password_confirmation" />
            </flux:field>
        </div>

        <div class="flex items-center gap-4">
            <flux:button type="submit" variant="primary">
                {{ __('Save') }}
            </flux:button>

            <x-action-message class="me-3" on="password-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
