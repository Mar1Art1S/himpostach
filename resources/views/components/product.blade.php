@props(['product'])

<x-decor.flip>
    <div
        class="front w-[400px] h-[400px] lf:w-[370px] lf:h-[370px] tg:w-[350px] tg:h-[350px] fg:w-[320px] fg:h-[320px] md:w-[370px] md:h-[370px]">
        <h2 class="p-3 mb-5 text-2xl text-center text-white uppercase font-r700"> {{ $product->name }} </h2>
        <div>
            @foreach ($product->options as $options)
            <div class="flex flex-row items-center w-full px-4 mt-4 ">
                <div class="justify-start w-3/4 text-sm text-white text-start">{{ $options['name'] }}</div>
                <div class="justify-end w-1/4 text-sm font-bold text-white text-end flex-nowrap">{{
                    $options['parameter'] }}</div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="back">
        <h4 class="mt-3 text-2xl font-semibold leading-10 text-center text-white uppercase">
            {{ $product->name }}
        </h4>
        <div class="flex flex-col items-center justify-center mt-5 space-y-3">


            <x-modal title="Замовлення товару" :product="$product">
                <x-slot:button>
                    <x-button @click="modalOpen=true" class="w-40">{{ __('Купити') }}</x-button>
                    </x-slot>
                    <livewire:order product="{{ $product['name'] }}" />
            </x-modal>

            <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                class="relative z-50 w-auto h-auto">
                <button @click="modalOpen=true"
                    class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-blue-800 border border-white rounded font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75">
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
                            class="relative w-[800px] h-[700px] py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto">
                            <div class="flex items-center justify-between pb-2 ">
                                <h3 class="text-lg font-semibold"> {{ $product->tds_title }}</h3>
                                <div class="mr-12 ">
                                    <a class="" href="{{ asset('storage/' . $product->tds_file) }}">
                                        <x-button class="block w-40 bg-blue-800 hover:bg-blue-900 hover:text-amber-500">{{
                                            __('ТDS') }}
                                        </x-button>
                                    </a>

                                </div>

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

                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</x-decor.flip>