<header>
    <nav x-data="{ open: false }" class="duration-500 bg-blue-800">
        <div class="relative flex items-center justify-between h-32 mx-5 containe xs:h-[70px]">

            {{-- Logo --}}
            <div class="flex items-center flex-shrink-0">
                <a href="{{ route('main') }}" class="block">
                    <img class="object-contain h-[130px] mf:h-[100px] sf:h-[80px] xs:h-[60px]"
                        src="{{ Vite::asset('resources/img/2_logo/Logo_new.png') }}" alt="Логотип" />
                </a>
            </div>

            {{-- Desktop Menu --}}
            <div class="flex items-center justify-center">
                <div class="block w-full fg:hidden sm:ml-6">
                    <div class="flex space-x-4">
                        <x-menu>
                            <x-menu.item :link="route('main')" :active="request()->routeIs('main')">
                                {{ __('Головна') }}
                            </x-menu.item>
                            <x-menu.item :link="route('about')" :active="request()->routeIs('about')">
                                {{ __('Про Нас') }}
                            </x-menu.item>
                            <x-menu.item :link="route('contact')" :active="request()->routeIs('contact')">
                                {{ __('Контакти') }}
                            </x-menu.item>
                            <x-menu.item :link="route('article.index')" :active="request()->routeIs('article.index')">
                                {{ __('Блог') }}
                            </x-menu.item>
                        </x-menu>
                    </div>
                </div>
            </div>

            {{-- Mobile Show Menu Button --}}
            <div class="inset-y-0 right-0 items-center hidden fg:block ms-8">
                <!-- Mobile menu button-->
                <button type="button" @click="open = !open"
                    class="relative inline-flex items-center justify-center p-2 text-white rounded-md"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <x-lucide-menu class="size-6" x-show="!open" />
                    <x-lucide-x class="size-6" x-show="open" />
                </button>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="open" x-collapse class="fg:block" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <x-menu>
                    <x-menu.item :link="route('main')" :active="request()->routeIs('main')">
                        {{ __('Головна') }}
                    </x-menu.item>
                    <x-menu.item :link="route('about')" :active="request()->routeIs('about')">
                        {{ __('Про Нас') }}
                    </x-menu.item>
                    <x-menu.item :link="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Контакти') }}
                    </x-menu.item>
                    <x-menu.item :link="route('article.index')" :active="request()->routeIs('article.index')">
                        {{ __('Блог') }}
                    </x-menu.item>
                </x-menu>
            </div>
        </div>
    </nav>

    <div class="w-full bg-amber-400">
        <div class="flex flex-row items-center justify-between h-16 mx-5 sf:mx-2">
            <div class="flex items-center justify-end text-white">
                <div class="text-base leading-normal text-right font-r400 sf:hidden">
                    {{ __('м.Кременчук') }}
                </div>

                <x-modal title="Задайте запитання">
                    <x-slot:button>
                        <x-button @click="modalOpen=true"
                            class="px-5 py-1.5 ms-4 bg-blue-700 border-none hover:bg-amber-500 uppercase rounded-lg sf:text-xs">
                            {{__('задайте запитання')}}
                        </x-button>
                        </x-slot>
                        <livewire:order />
                </x-modal>

            </div>

            <ul>
                <li class="">
                    <a class="text-xl text-white font-r300" href="#">{{ __('UA') }}</a>
                </li>
            </ul>
        </div>
    </div>
</header>