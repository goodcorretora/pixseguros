<nav x-data="{ open: false }" class="bg-secondary-100 border-b border-secondary-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-secondary-800" />
                    </a>
                </div>
                <div class="hidden space-x-1 sm:-my-px sm:ml-2 lg:flex ">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <!-- ...outros links... -->
                </div>
            </div>
            <div class="flex items-center">
                <button wire:click="logout" class="text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md px-2 py-2 text-base mt-3">
                    Sair
                </button>
            </div>
        </div>
    </div>
</nav>
