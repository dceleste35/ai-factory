<div>
    <flux:heading size="lg">{{ __('Confirm Password') }}</flux:heading>
    <flux:subheading class="mb-4">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </flux:subheading>

    <form wire:submit="confirmPassword">
        <!-- Password -->
        <div>
            <flux:field>
                <flux:label>{{ __('Password') }}</flux:label>
                <flux:input type="password" wire:model="password" viewable required autocomplete="current-password" />
                <flux:error name="password" />
            </flux:field>
        </div>

        <div class="mt-4 flex justify-end">
            <flux:button class="ms-3" type="button" variant="primary" wire:click="resetPassword">
                {{ __('Confirm') }}
            </flux:button>
        </div>
    </form>
</div>
