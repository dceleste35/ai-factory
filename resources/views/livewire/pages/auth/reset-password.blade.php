<div>
    <form wire:submit="resetPassword">
        <!-- Email Address -->
        <div>
            <flux:field>
                <flux:label>{{ __('Email') }}</flux:label>
                <flux:input type="email" required autocomplete="username" autofocus wire:model="email" />
                <flux:error name="email" />
            </flux:field>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <flux:field>
                <flux:label>{{ __('Password') }}</flux:label>
                <flux:input type="password" wire:model="password" viewable required autocomplete="new-password" />
                <flux:error name="password" />
            </flux:field>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <flux:field>
                <flux:label>{{ __('Confirm Password') }}</flux:label>
                <flux:input
                    type="password"
                    wire:model="password_confirmation"
                    viewable
                    required
                    autocomplete="new-password"
                />
                <flux:error name="password_confirmation" />
            </flux:field>
        </div>

        <div class="mt-6 flex items-center justify-end">
            <flux:button class="ms-3" type="submit" variant="primary">
                {{ __('Reset Password') }}
            </flux:button>
        </div>
    </form>
</div>
