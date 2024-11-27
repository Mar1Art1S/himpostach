@props(['image', 'title', 'description', 'link'])

<x-decor.flip>

    <div class="relative front">
        <img class="absolute" src="{{ $image }}" alt="" />
        <div
            class="front w-[400px] h-[400px] lf:w-[370px] lf:h-[370px] tg:w-[350px] tg:h-[350px] fg:w-[320px] fg:h-[320px] md:w-[370px] md:h-[370px]">
            <h2 class="p-3 mb-5 text-2xl text-center text-white uppercase font-r700"> {{ $title }} </h2>
            <div>

                <div class="flex flex-row items-center w-full px-4 mt-4 ">
                    <div class="justify-start w-3/4 text-sm text-white text-start">{{ }}</div>
                    <div class="justify-end w-1/4 text-sm font-bold text-white text-end flex-nowrap">{{  }}</div>
                </div>


            </div>
        </div>
    </div>
    <div class="back">
        <h4 class="pt-5 text-1.5xl leading-[28px] font-r700 text-center">
            {{ $title }}
        </h4>
        <p class="py-10 text-1.5xl font-r400 m-2 leading-[24px] text-center lf:py-4 lf:text-base lf:leading-[16px]">
            {{ $description }}
        </p>
        <div class="flex items-center justify-center">
            <a class="inline-block px-12 py-3 text-sm text-white border border-white rounded font-r400 bg-amber-400 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white"
                href="{{ $link }}">
                {{ __('other.other_next') }}
            </a>
        </div>
    </div>

</x-decor.flip>