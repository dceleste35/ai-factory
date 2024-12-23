<div class="space-y-4">
    <flux:heading size="lg">{{ __('Forgot your password?') }}</flux:heading>
    <flux:subheading>
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </flux:subheading>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink">
        <!-- Email Address -->
        <flux:field>
            <flux:label>{{ __('Email') }}</flux:label>
            <flux:input type="email" wire:model="email" required autofocus />

            <flux:error name="email" />
        </flux:field>

        <flux:button class="mt-6 w-full" type="submit" variant="primary">
            {{ __('Email Password Reset Link') }}
        </flux:button>
    </form>
</div>
