<nav class="flex flex-1 justify-end space-x-2">
    @auth
        <flux:button href="{{ url('/home') }}" wire:navigate>{{ __('Home') }}</flux:button>
    @else
        <flux:button href="{{ route('login') }}" wire:navigate>{{ __('Log in') }}</flux:button>

        @if (Route::has('register'))
            <flux:button href="{{ route('register') }}" wire:navigate>
                {{ __('Register') }}
            </flux:button>
        @endif
    @endauth
</nav>
