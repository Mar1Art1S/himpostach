@extends('layouts.base')

@section('content')

<x-section class="container mx-auto">
    <div class="flex items-center justify-center mt-12">
        <x-slot:caption>
            {{ __('Блог') }}
            </x-slot>
    </div>
    {{-- <nav x-data="{
            navigationMenuOpen: false,
            navigationMenu: '',
            navigationMenuCloseDelay: 200,
            navigationMenuCloseTimeout: null,
            navigationMenuLeave() {
                let that = this;
                this.navigationMenuCloseTimeout = setTimeout(() => {
                    that.navigationMenuClose();
                }, this.navigationMenuCloseDelay);
            },
            navigationMenuReposition(navElement) {
                this.navigationMenuClearCloseTimeout();
                this.$refs.navigationDropdown.style.left = navElement.offsetLeft + 'px';
                this.$refs.navigationDropdown.style.marginLeft = (navElement.offsetWidth/2) + 'px';
            },
            navigationMenuClearCloseTimeout(){
                clearTimeout(this.navigationMenuCloseTimeout);
            },
            navigationMenuClose(){
                this.navigationMenuOpen = false;
                this.navigationMenu = '';
            }
        }" class="relative z-10 w-auto">
        <div class="relative">
            <ul class="flex items-center justify-center flex-1 p-1 space-x-1 list-none group ">
                <li>
                    <button
                        :class="{ 'bg-neutral-100' : navigationMenu=='getting-started', 'hover:bg-neutral-100' : navigationMenu!='getting-started' }"
                        @mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='getting-started'"
                        @mouseleave="navigationMenuLeave()"
                        class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none group w-max">
                        <a class="font-r900 text-1.5xl" href="{{ route('article.index') }}">Категорії</a>
                        <svg :class="{ '-rotate-180' : navigationMenuOpen==true && navigationMenu == 'getting-started' }"
                            class="relative top-[1px] ml-1 h-3 w-3 ease-out duration-300"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                </li>
                <li>
                    <button
                        :class="{ 'bg-neutral-100' : navigationMenu=='learn-more', 'hover:bg-neutral-100' : navigationMenu!='learn-more' }"
                        @mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='learn-more'"
                        @mouseleave="navigationMenuLeave()"
                        class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-neutral-100 group w-max">
                        <span>Learn More</span>
                        <svg :class="{ '-rotate-180' : navigationMenuOpen==true && navigationMenu == 'learn-more' }"
                            class="relative top-[1px] ml-1 h-3 w-3 ease-out duration-300"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                </li>
                <li>
                    <a href="#_"
                        class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-neutral-100 group w-max">
                        Documentation
                    </a>
                </li>
            </ul>
        </div>
        <div x-ref="navigationDropdown" x-show="navigationMenuOpen"
            x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
            @mouseover="navigationMenuClearCloseTimeout()" @mouseleave="navigationMenuLeave()"
            class="absolute top-0 pt-3 duration-200 ease-out -translate-x-1/2 translate-y-11" x-cloak>

            <div
                class="flex justify-center w-auto h-auto overflow-hidden bg-white border rounded-md shadow-sm border-neutral-200/70">

                <div x-show="navigationMenu == 'getting-started'"
                    class="flex items-stretch justify-center w-full max-w-2xl p-6 gap-x-3">

                    <div class="w-72">

                        <div>
                            @foreach ($categories as $category)
                            <a class="flex flex-col justify-start gap-2 font-700 text-1.5xl "
                                href="{{ route('article.category', $category->slug) }}">{{ $category->title }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div x-show="navigationMenu == 'learn-more'" class="flex items-stretch justify-center w-full p-6">
                    <div class="w-72">
                        <a href="#_" @click="navigationMenuClose()"
                            class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                            <span class="block mb-1 font-medium text-black">Tailwind CSS</span>
                            <span class="block font-light leading-5 opacity-50">A utility first CSS framework for
                                building amazing websites.</span>
                        </a>
                        <a href="#_" @click="navigationMenuClose()"
                            class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                            <span class="block mb-1 font-medium text-black">Laravel</span>
                            <span class="block font-light leading-5 opacity-50">The perfect all-in-one framework for
                                building amazing apps.</span>
                        </a>
                        <a href="#_" @click="navigationMenuClose()"
                            class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                            <span class="block mb-1 font-medium text-black">Pines UI</span>
                            <span class="block leading-5 opacity-50">An Alpine JS and Tailwind CSS UI library for
                                awesome people. </span>
                        </a>
                    </div>
                    <div class="w-72">
                        <a href="#_" @click="navigationMenuClose()"
                            class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                            <span class="block mb-1 font-medium text-black">AlpineJS</span>
                            <span class="block font-light leading-5 opacity-50">A framework without the complex setup or
                                heavy dependencies.</span>
                        </a>
                        <a href="#_" @click="navigationMenuClose()"
                            class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                            <span class="block mb-1 font-medium text-black">Livewire</span>
                            <span class="block leading-5 opacity-50">A seamless integration of server-side and
                                client-side interactions.</span>
                        </a>
                        <a href="#_" @click="navigationMenuClose()"
                            class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                            <span class="block mb-1 font-medium text-black">Tails</span>
                            <span class="block leading-5 opacity-50">The ultimate Tailwind CSS design tool that helps
                                you craft beautiful websites.</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </nav> --}}

    <section class="bg-white w-full mt-[40px]">
        {{-- <div class="flex flex-row mb-4">
            <div class="w-4/12">
                <div class="mb-4">Category: Food</div>
            </div>
        </div> --}}
        <x-decor.card>
            @foreach($articles as $article)
            <div class="flex flex-col items-start w-[400px] h-[440px]">
                <a href="{{ route('article.show', [$article->category->slug, $article->slug]) }}" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden shadow-sm h-[300px]"
                        src="{{ Storage::url($article->preview_image) }}">
                </a>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">
                    <a href="{{ route('article.show', [$article->category->slug, $article->slug]) }}">
                        {{ $article->title }}
                    </a>
                </h2>
                <p class="text-sm text-gray-500">{{ $article->preview_text }}</p>
                <p class="pt-2 text-xs font-medium">
                    <span class="mx-1">{{ $article->formatted_published_at }}</span> ·
                    <span class="mx-1 text-gray-600">{{ $article->category->title }}</span>
                </p>
            </div>
            @endforeach


        </x-decor.card>
        <div class="flex justify-center mt-8">
            <div class="mt-4 ">
                {{ $articles->links('vendor.pagination.custom') }}
            </div>

        </div>


        </div>
    </section>

</x-section>

@endsection