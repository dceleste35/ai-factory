<div
    class="fi-theme-switcher grid grid-flow-col gap-x-1 rounded-lg bg-zinc-200 p-1 dark:bg-zinc-800"
    x-data="themeSelector"
    x-init="init"
    x-cloak
>
    <button
        class="fi-theme-switcher-btn flex justify-center rounded-md p-2 outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5"
        type="button"
        x-on:click="updateTheme('light')"
        x-bind:class="
            theme === 'light'
                ? 'fi-active bg-gray-50 text-orange-500 dark:bg-white/5 dark:text-orange-400'
                : 'text-gray-400 hover:text-gray-500 focus-visible:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:text-gray-400'
        "
    >
        <svg
            class="h-5 w-5"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
        >
            <path
                d="M10 2a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 2ZM10 15a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 15ZM10 7a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM15.657 5.404a.75.75 0 1 0-1.06-1.06l-1.061 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM6.464 14.596a.75.75 0 1 0-1.06-1.06l-1.06 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM18 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 18 10ZM5 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 5 10ZM14.596 15.657a.75.75 0 0 0 1.06-1.06l-1.06-1.061a.75.75 0 1 0-1.06 1.06l1.06 1.06ZM5.404 6.464a.75.75 0 0 0 1.06-1.06l-1.06-1.06a.75.75 0 1 0-1.061 1.06l1.06 1.06Z"
            />
        </svg>
    </button>

    <button
        class="fi-theme-switcher-btn flex justify-center rounded-md p-2 outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5"
        type="button"
        aria-label="Activer le mode sombre"
        x-on:click="updateTheme('dark')"
        x-bind:class="
            theme === 'dark'
                ? 'fi-active bg-gray-50 text-orange-500 dark:bg-white/5 dark:text-orange-400'
                : 'text-gray-400 hover:text-gray-500 focus-visible:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:text-gray-400'
        "
    >
        <svg
            class="h-5 w-5"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
        >
            <path
                fill-rule="evenodd"
                d="M7.455 2.004a.75.75 0 0 1 .26.77 7 7 0 0 0 9.958 7.967.75.75 0 0 1 1.067.853A8.5 8.5 0 1 1 6.647 1.921a.75.75 0 0 1 .808.083Z"
                clip-rule="evenodd"
            />
        </svg>
    </button>

    <button
        class="fi-theme-switcher-btn flex justify-center rounded-md p-2 outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5"
        type="button"
        aria-label="Activer le thème système"
        x-on:click="updateTheme('system')"
        x-bind:class="
            theme === 'system'
                ? 'fi-active bg-gray-50 text-orange-500 dark:bg-white/5 dark:text-orange-400'
                : 'text-gray-400 hover:text-gray-500 focus-visible:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:text-gray-400'
        "
    >
        <svg
            class="h-5 w-5"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
        >
            <path
                fill-rule="evenodd"
                d="M2 4.25A2.25 2.25 0 0 1 4.25 2h11.5A2.25 2.25 0 0 1 18 4.25v8.5A2.25 2.25 0 0 1 15.75 15h-3.105a3.501 3.501 0 0 0 1.1 1.677A.75.75 0 0 1 13.26 18H6.74a.75.75 0 0 1-.484-1.323A3.501 3.501 0 0 0 7.355 15H4.25A2.25 2.25 0 0 1 2 12.75v-8.5Zm1.5 0a.75.75 0 0 1 .75-.75h11.5a.75.75 0 0 1 .75.75v7.5a.75.75 0 0 1-.75.75H4.25a.75.75 0 0 1-.75-.75v-7.5Z"
                clip-rule="evenodd"
            />
        </svg>
    </button>
</div>

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('themeSelector', () => ({
                theme: localStorage.getItem('theme') || 'dark',
                updateTheme(newTheme) {
                    this.theme = newTheme
                    localStorage.setItem('theme', newTheme)
                    this.applyTheme()
                },
                applyTheme() {
                    const root = window.document.documentElement
                    root.classList.remove('dark', 'light')

                    if (
                        this.theme === 'dark' ||
                        (this.theme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)
                    ) {
                        root.classList.add('dark')
                    } else {
                        root.classList.add('light')
                    }
                },
                init() {
                    this.applyTheme()
                    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                        if (this.theme === 'system') {
                            this.applyTheme()
                        }
                    })
                }
            }))
        })
    </script>
@endpush
