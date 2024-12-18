<header>
    <nav x-data="{ open: false }" class="duration-500 bg-blue-800">
        <div class="relative flex items-center justify-between h-32 mx-5 containe xs:h-[70px]">

            {{-- Logo --}}
            <div class="flex items-center flex-shrink-0">
                <a href="{{ route('main') }}" class="block">
                    <img class="object-contain h-[130px] mf:h-[100px] sf:h-[80px] xs:h-[60px]"
                         src="{{ Vite::asset('resources/img/2_logo/Logo_new.png') }}" alt="Логотип"/>
                </a>
            </div>

            {{-- Desktop Menu --}}
            <div class="flex items-center justify-center">
                <div class="block w-full fg:hidden sm:ml-6">
                    <div class="flex space-x-4">
                        <x-menu>
                            <x-menu.item :link="route('main')" :active="request()->routeIs('main')">
                                {{ __('header.header_home') }}
                            </x-menu.item>
                            <x-menu.item :link="route('about')" :active="request()->routeIs('about')">
                                {{ __('header.header_about') }}
                            </x-menu.item>
                            <x-menu.item :link="route('contact')" :active="request()->routeIs('contact')">
                                {{ __('header.header_contact') }}
                            </x-menu.item>
                            <x-menu.item :link="route('article.index')" :active="request()->routeIs('article.index')">
                                {{ __('header.header_blog') }}
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
                    <x-lucide-menu class="size-6" x-show="!open"/>
                    <x-lucide-x class="size-6" x-show="open"/>
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

    <div class="w-full bg-amber-400 ">

        <div class="flex flex-row items-center justify-between h-16 mx-5 sf:mx-2">
            <div class="flex items-center justify-end text-white">
                <div class="text-base leading-normal text-right font-r400 sf:hidden">
                    {{ __('other.other_citi') }}
                </div>

                <x-modal title="{{ __('other.other_question') }}">
                    <x-slot:button>
                        <x-button @click="modalOpen=true"
                                  class="px-5 py-1.5 ms-4 bg-blue-700 border-none hover:bg-amber-500 uppercase rounded-lg sf:text-xs">
                            {{__('other.other_question')}}
                        </x-button>
                    </x-slot>
                    <livewire:order/>
                </x-modal>
            </div>

            <div x-data="{ open: false }" class="relative inline-block text-left">
                <!-- Кнопка для відкриття меню -->
                <button
                        @click="open = !open"
                        class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    {{__('lang.lang')}}

                    <svg
                            class="w-5 h-5 ml-2 -mr-1"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                    >
                        <path fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.42l3.71-4.19a.75.75 0 011.08 1.04l-4.25 4.75a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                              clip-rule="evenodd"/>
                    </svg>
                </button>

                <!-- Меню -->
                <div
                        x-show="open"
                        @click.outside="open = false"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 z-[1000000] w-56 mt-2 origin-top-right bg-white border border-gray-300 divide-y divide-gray-100 rounded-md shadow-lg focus:outline-none"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="menu-button"
                        tabindex="-1"
                >
                    <div class="py-1" role="none">
                        <a href="{{ route('set-language', 'en') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                           role="menuitem" tabindex="-1" id="menu-item-0">ENG</a>
                        <a href="{{ route('set-language', 'uk') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                           role="menuitem" tabindex="-1" id="menu-item-1">UA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>