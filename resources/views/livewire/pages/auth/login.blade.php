<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <div class="space-y-4">
            <flux:field>
                <flux:label>{{ __('Email') }}</flux:label>
                <flux:input type="email" required autocomplete="username" autofocus wire:model="form.email" />
                <flux:error name="form.email" />
            </flux:field>
            <!-- Password -->
            <flux:field>
                <flux:label>{{ __('Password') }}</flux:label>
                <flux:input
                    type="password"
                    wire:model="form.password"
                    viewable
                    required
                    autocomplete="current-password"
                />
                <flux:error name="form.password" />
            </flux:field>
            <!-- Remember Me -->
            <flux:checkbox wire:model="form.remember" label="{{ __('Remember me') }}" />
        </div>

        <div class="mt-6 flex flex-col items-center justify-center space-y-2">
            <flux:button class="w-full" type="submit" variant="primary">
                {{ __('Log in') }}
            </flux:button>

            @if (Route::has('password.request'))
                <a
                    class="select-none text-sm font-medium text-zinc-800 underline dark:text-white"
                    href="{{ route('password.request') }}"
                    wire:navigate
                >
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
    </form>
</div>
