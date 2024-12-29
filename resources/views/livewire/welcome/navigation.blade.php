<nav class="flex flex-1 justify-end">
    @auth
        <flux:button href="{{ url('/home') }}" wire:navigate>{{ __('Home') }}</flux:button>
    @else
        <flux:button href="{{ route('login') }}" wire:navigate variant="ghost">{{ __('Log in') }}</flux:button>

        @if (Route::has('register'))
            <flux:button href="{{ route('register') }}" wire:navigate variant="ghost">
                {{ __('Register') }}
            </flux:button>
        @endif
    @endauth
</nav>
