<div>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex flex-col items-center justify-between space-y-4">
        <flux:button class="w-full" wire:click="sendVerification" variant="primary">
            {{ __('Resend Verification Email') }}
        </flux:button>

        <button
            class="select-none text-sm font-medium text-zinc-800 underline dark:text-white"
            type="submit"
            wire:click="logout"
        >
            {{ __('Log Out') }}
        </button>
    </div>
</div>
