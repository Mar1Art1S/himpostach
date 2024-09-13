@props(['image', 'title', 'description', 'link', 'video' => null])

<x-decor.flip-v>

    <div class="relative front">
        <img class="absolute" src="{{ $image }}" alt=""/>
        <h3
                class="absolute pl-5 leading-[40px] text-3xl font-r900 bg-slate-800 bg-opacity-50 w-[400px] h-[400px] uppercase lf:w-[300px] lf:h-[300px] lf:text-2xl">
            {{ $title }}
        </h3>
    </div>
    <div class="back">
        <h4 class="pt-5 text-1.5xl leading-[28px] font-r700 text-center lf:text-base lf:leading-[16px]">
            {{ $title }}
        </h4>
        <p class="py-10 text-1.5xl font-r400 m-2  leading-[24px] text-center lf:py-4 lf:text-base lf:leading-[16px]">
            {{ $description }}
        </p>
        <div class="flex items-center justify-center">
            <a class="inline-block px-12 py-3 text-sm text-white border border-white rounded font-r400 bg-amber-400 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white"
               href="{{ $link }}">
                {{ __('Далі') }}
            </a>
            <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                 class="relative z-50 w-auto h-auto">
                <button @click="modalOpen=true"
                        class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-blue-800 border border-white rounded font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75">
                    {{ __('Відео') }}</button>
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
                             class="relative w-[600px] h-[400px]  py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto">
                            <div class="flex items-center justify-between pb-2 ">


                                <button @click="modalOpen=false"
                                        class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="relative w-auto">
                                <div class="">
                                    @isset($video)
                                        <iframe
                                                width="510"
                                                height="340"
                                                src="https://www.youtube.com/embed/{{$video }}"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen>

                                        </iframe>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

</x-decor.flip-v>
