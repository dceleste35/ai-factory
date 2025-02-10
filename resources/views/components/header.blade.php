<flux:sidebar
    class="border-r border-zinc-200 bg-zinc-50 dark:border-zinc-800 dark:bg-zinc-950 lg:dark:bg-zinc-950/50"
    sticky
    stashable
>
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

    <flux:brand class="px-2 dark:hidden" name="Acme Inc." href="#" logo="https://fluxui.dev/img/demo/logo.png" />
    <flux:brand
        class="hidden px-2 dark:flex"
        name="Unknown"
        href="#"
        logo="https://fluxui.dev/img/demo/dark-mode-logo.png"
    />

    <flux:navlist>
        <flux:navlist.group class="overflow-hidden" heading="Favoris" expandable>
            <flux:navlist.item href="#" current>Marketing site</flux:navlist.item>
            <flux:navlist.item href="#">Android app</flux:navlist.item>
            <flux:navlist.item href="#">Brand guidelines Brand guidelines Brand guidelines</flux:navlist.item>
        </flux:navlist.group>

        <flux:navlist.group class="overflow-hidden" heading="Récents" expandable>
            <flux:navlist.item href="#">Marketing site</flux:navlist.item>
            <flux:navlist.item href="#">Android app</flux:navlist.item>
            <flux:navlist.item href="#">Brand guidelines Brand guidelines Brand guidelines</flux:navlist.item>
        </flux:navlist.group>

        <flux:navlist.item href="#" icon="bars-4">Voir tout</flux:navlist.item>
    </flux:navlist>

    <flux:spacer />

    {{--
        <flux:navlist variant="outline">
        <flux:navlist.item href="#" icon="information-circle">Help</flux:navlist.item>
        </flux:navlist>
    --}}
    <flux:radio.group variant="segmented" x-model="$flux.appearance">
        <flux:radio value="light" icon="sun" />
        <flux:radio value="dark" icon="moon" />
        <flux:radio value="system" icon="computer-desktop" />
    </flux:radio.group>

    <flux:dropdown class="max-lg:hidden" position="top" align="start">
        <flux:profile :name="auth()->user()->name" avatar="https://fluxui.dev/img/demo/user.png" />

        <flux:menu>
            <flux:menu.item href="profile" icon="user">{{ __('Profile') }}</flux:menu.item>
            <flux:menu.item href="settings" icon="cog-6-tooth">{{ __('Settings') }}</flux:menu.item>
            <flux:menu.separator />
            <flux:menu.item href="logout" icon="arrow-right-start-on-rectangle">{{ __('Logout') }}</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
</flux:sidebar>

<flux:header
    class="block border-b border-zinc-200 bg-white lg:hidden lg:bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900"
>
    <flux:navbar class="w-full">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <flux:dropdown position="top" align="start">
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />

            <flux:menu>
                <flux:menu.item icon="arrow-right-start-on-rectangle">{{ __('Logout') }}</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:navbar>
</flux:header>
