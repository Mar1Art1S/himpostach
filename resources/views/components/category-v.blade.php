@props(['image', 'title', 'description', 'link', 'video_one', 'video_two', 'video_three', 'video_four', 'video_five'])
<x-decor.flip-v>
    <div class="relative front xs:hidden">
        <img class="absolute" src="{{ $image }}" alt=""/>
        <h3
                class="absolute pl-5 leading-[40px] text-3xl font-r900 bg-slate-800 bg-opacity-50 w-[400px] h-[400px] uppercase lf:w-[300px] lf:h-[300px] lf:text-2xl">
            {{ $title }}
        </h3>
    </div>
    <div class="back xs:hidden">
        <h4 class="pt-5 text-1.5xl leading-[28px] font-r700 text-center lf:text-base lf:leading-[16px]">
            {{ $title }}
        </h4>
        <p class="py-10 text-1.5xl font-r400 m-2 leading-[24px] text-center lf:py-4 lf:text-base lf:leading-[16px]">
            {{ $description }}
        </p>
        <div class="flex items-center justify-center">
            <a class="inline-block px-12 py-3 text-sm text-white border border-white rounded font-r400 bg-amber-400 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white lf:px-8 lf:py-2"
               href="{{ $link }}">
                {{ __('other.other_next') }}
            </a>
            @isset($video_one)
                <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                     class="relative z-50 w-auto h-auto">
                    <button @click="modalOpen=true"
                            class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-blue-800 border border-white rounded font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75 lf:py-2 lf:px-4 lf:w-24">
                        {{ __('other.other_video') }}</button>
                    <template x-teleport="body">
                        <div x-show="modalOpen"
                             class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                             x-cloak>
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
                                 class="relative w-[600px] h-[500px]  py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto">
                                <div class="flex items-center justify-between pb-2 ">


                                    <button @click="modalOpen=false"
                                            class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                        <svg class="block w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative flex flex-col w-auto">
                                    <div class="pt-5 my-2">
                                        @isset($video_one)
                                            <iframe width="510" height="340"
                                                    src="https://www.youtube.com/embed/{{$video_one }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        @endisset
                                    </div>
                                    <div class="my-1">
                                        @isset($video_two)
                                            <iframe width="510" height="340"
                                                    src="https://www.youtube.com/embed/{{$video_two }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        @endisset
                                    </div>
                                    <div class="my-1">
                                        @isset($video_three)
                                            <iframe width="510" height="340"
                                                    src="https://www.youtube.com/embed/{{$video_three }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        @endisset
                                    </div>
                                    <div class="my-1">
                                        @isset($video_four)
                                            <iframe width="510" height="340"
                                                    src="https://www.youtube.com/embed/{{$video_four }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        @endisset
                                    </div>
                                    <div class="my-1">
                                        @isset($video_five)
                                            <iframe width="510" height="340"
                                                    src="https://www.youtube.com/embed/{{$video_five }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        @endisset
                                    </div>

                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            @endisset
        </div>
    </div>

</x-decor.flip-v>

{{-- xs screen version --}}
<div class="hidden xs:block xs:relative xs:w-[350px] xs:h-[350px]">
    <img class="xs:absolute xs:w-full xs:h-full" src="{{ $image }}" alt=""/>

    {{-- Title positioned at the top of the card --}}
    <h3
            class="xs:absolute xs:top-0 xs:bg-slate-800 xs:bg-opacity-50 xs:w-full xs:text-2xl xs:font-r900 xs:uppercase xs:text-center xs:text-white">
        {{ $title }}
    </h3>

    {{-- Button positioned at the bottom of the card --}}
    <div class=" xs:absolute xs:bottom-4 xs:w-full xs:h-auto xs:flex xs:justify-center xs:items-center">
        <a class="xs:rounded xs:px-8 xs:py-2 xs:m-2 xs:text-sm xs:text-white xs:font-r400 xs:bg-amber-400 xs:hover:bg-transparent xs:hover:text-white focus:outline-none focus:ring active:text-white"
           href="{{ $link }}">
            {{ __('other.other_next') }}
        </a>
        @isset($video_one)
            <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                 class="relative z-50 w-auto h-auto">
                <button @click="modalOpen=true"
                        class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-blue-800 border border-white rounded font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75 lf:py-2 lf:px-4 lf:w-24">
                    {{ __('other.other_video') }}</button>
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
                             class="relative w-auto h-[500px]  py-1 bg-white px-8 sm:max-w-lg sm:rounded-lg overflow-y-auto">
                            <div class="flex items-center justify-between pb-2 ">


                                <button @click="modalOpen=false"
                                        class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-8 ml-8 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                    <svg class="block w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="relative flex flex-col w-auto">
                                <div class="pt-5 my-0">

                                    @isset($video_one)
                                        <iframe src="https://www.youtube.com/embed/{{$video_one}}"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen></iframe>
                                    @endisset
                                </div>
                                <div class="my-1">
                                    @isset($video_two)
                                        <iframe width="100%" height="100%"
                                                src="https://www.youtube.com/embed/{{$video_two}}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    @endisset
                                </div>
                                <div class="my-1">
                                    @isset($video_three)
                                        <iframe width="100%" height="100%"
                                                src="https://www.youtube.com/embed/{{$video_three}}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    @endisset
                                </div>
                                <div class="my-1">
                                    @isset($video_four)
                                        <iframe width="100%" height="100%"
                                                src="https://www.youtube.com/embed/{{$video_four}}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    @endisset
                                </div>
                                <div class="my-1">
                                    @isset($video_five)
                                        <iframe width="100%" height="100%"
                                                src="https://www.youtube.com/embed/{{$video_five}}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    @endisset
                                </div>

                            </div>
                        </div>
                    </div>
                </template>
            </div>
        @endisset
    </div>
</div>
