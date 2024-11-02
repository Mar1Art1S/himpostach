@props(['product'])

<x-decor.flip>
    <div class=" xs:hidden front w-[400px] h-[400px] lf:w-[370px] lf:h-[370px] tg:w-[350px] tg:h-[350px] fg:w-[320px] fg:h-[320px] md:w-[370px] md:h-[370px]">
        <h2 class=" p-3 mb-5 text-2xl text-center text-white uppercase font-r700 lf:text-1.5xl lf:mb-1 lf:p-1"> {{ $product->name }} </h2>
        <div>
            @foreach ($product->options as $options)
            <div class="flex flex-row items-center w-full px-4 mt-4 lf:mt-2">
                <div class="justify-start w-3/4 text-sm text-white text-start lf:leading-[15px] lf:w-2/3">{{ $options['name'] }}</div>
                <div class="justify-end w-1/4 text-sm font-bold text-white text-end flex-nowrap lf:text-xs lf:w-1/3">{{
                    $options['parameter'] }}</div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="back xs:hidden">
        <h4 class="mt-3 text-2xl font-semibold leading-10 text-center text-white uppercase">
            {{ $product->name }}
        </h4>
        <div class="flex flex-col items-center justify-center mt-5 space-y-3">
            <x-modal title="Замовлення товару" :product="$product">
                <x-slot:button>
                    <x-button @click="modalOpen=true" class="w-40 lf:py-2 lf:px-4 lf:w-24">{{ __('Купити') }}</x-button>
                </x-slot>
                    <livewire:order product="{{ $product['name'] }}" />

            </x-modal>
            @if($product->tds_content)
            <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                class="relative z-50 w-auto h-auto">
                <button @click="modalOpen=true"
                    class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-blue-800 border border-white rounded font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75 lf:py-2 lf:px-4 lf:w-24">
                    {{ __('TDS') }}</button>
                <template x-teleport="body">
                    <div x-show="modalOpen"
                        class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                        <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click="modalOpen=false"
                            class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                        <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                            x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="relative w-[860px] h-[700px] py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto overflow-auto">
                            <div class="flex items-center justify-between pb-2 ">
                                <h3 class="text-lg font-semibold"> {{ $product->tds_title }}</h3>
                                <button @click="modalOpen=false"
                                    class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="relative w-auto">
                                    <div class="">
                                        {!! $product->tds_content !!}
                                    </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            @endif
            @if($product->tehcarta_content)
                <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                     class="relative z-50 w-auto h-auto">

                    <button @click="modalOpen=true"
                            class="inline-block w-[100px]  text-sm text-white text-center font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75">
                        {{ __('Технологічна карта') }}
                    </button>

                    <template x-teleport="body">
                        <div x-show="modalOpen"
                             class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                            <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                                 x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                 x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0" @click="modalOpen=false"
                                 class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                            <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                 x-transition:enter="ease-out duration-300"
                                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                 x-transition:leave="ease-in duration-200"
                                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                 class="relative w-[860px] h-[700px] py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto">
                                    <button @click="modalOpen=false"
                                            class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative w-auto">
                                    <div class="">
                                        {!! $product->tehcarta_content !!}
                                    </div>
                                </div>
                            </div>
                    </template>
                </div>
            @endif
        </div>
    </div>

</x-decor.flip>

<div class="hidden xs:block">
    <div class="xs:w-[350px] xs:h-auto xs:bg-slate-600">
        <h2 class="hidden xs:block xs:p-3 xs:mb-5 xs:text-xl xs:text-center xs:text-white xs:uppercase xs:font-r700">
            {{ $product->name }}
        </h2>
        <div>
            @foreach ($product->options as $options)
                <div class="xs:flex xs:flex-row xs:items-center xs:w-full xs:px-4 xs:mt-2">
                    <div class="w-3/4 text-sm text-white text-start lf:leading-[15px]">{{ $options['name'] }}</div>
                    <div class="w-1/4 text-sm font-bold text-white xs:text-xs text-end flex-nowrap">{{ $options['parameter'] }}</div>
                </div>
            @endforeach
        </div>


        <div class="hidden xs:flex xs:flex-col xs:items-center xs:justify-center xs:mt-5 xs:space-y-3">
            <x-modal title="Замовлення товару" :product="$product">
                <x-slot:button>
                    <x-button @click="modalOpen=true" class="w-40 lf:py-2 lf:px-4 lf:w-24">{{ __('Купити') }}</x-button>
                </x-slot>
                <livewire:order product="{{ $product['name'] }}"/>
            </x-modal>

            @if($product->tds_content)
                <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                     class="relative z-50 w-auto h-auto">
                    <button @click="modalOpen=true"
                            class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-blue-800 border border-white rounded font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75 lf:py-2 lf:px-4 lf:w-24">
                        {{ __('TDS') }}
                    </button>
                    <template x-teleport="body">
                        <div x-show="modalOpen"
                             class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                            <div x-show="modalOpen" @click="modalOpen=false"
                                 class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                            <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                 class="relative w-[860px] h-[500px] py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto xs:overflow-auto xs:p-1">
                                <div class="flex items-center justify-between pb-2">
                                    <h3 class="text-sm font-semibold">{{ $product->tds_title }}</h3>
                                    <button @click="modalOpen=false"
                                            class="absolute top-0 right-0 w-8 h-8 mt-5 mr-5 text-gray-600 hover:text-gray-800 hover:bg-gray-50">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative">
                                    <div>{!! $product->tds_content !!}</div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            @endif

            @if($product->tehcarta_content)
                <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                     class="relative z-50 w-auto h-auto">
                    <button @click="modalOpen=true"
                            class="inline-block w-[100px] text-sm text-white font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75">
                        {{ __('Технологічна карта') }}
                    </button>
                    <template x-teleport="body">
                        <div x-show="modalOpen"
                             class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                            <div x-show="modalOpen" @click="modalOpen=false"
                                 class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                            <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                 class="relative w-[860px] h-[700px] py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto">
                                <button @click="modalOpen=false"
                                        class="absolute top-0 right-0 w-8 h-8 mt-5 mr-5 text-gray-600 hover:text-gray-800 hover:bg-gray-50">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                                <div class="relative">
                                    <div>{!! $product->tehcarta_content !!}</div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            @endif
        </div>
    </div>
</div>



