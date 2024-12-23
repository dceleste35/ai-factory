<div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <flux:field>
                <flux:label>{{ __('Name') }}</flux:label>
                <flux:input type="text" required autocomplete="name" autofocus wire:model="name" />
                <flux:error name="name" />
            </flux:field>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
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

        <div class="mt-6 flex flex-col items-center justify-end space-y-2">
            <flux:button class="w-full" type="submit" variant="primary">
                {{ __('Register') }}
            </flux:button>
            <a
                class="select-none text-sm font-medium text-zinc-800 underline dark:text-white"
                href="{{ route('login') }}"
                wire:navigate
            >
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</div>
