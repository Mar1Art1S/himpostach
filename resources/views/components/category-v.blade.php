@props(['image', 'title', 'description', 'link', 'link_two'])

<x-decor.flip-v>

    <div class="relative front">
        <img class="absolute" src="{{ $image }}" alt="" />
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
            <a class="inline-block px-12 py-3 ml-2 text-sm text-white bg-blue-800 border border-white rounded font-r400 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white"
                href="{{ $link_two }}">
                {{ __('Відео') }}
            </a>
        </div>
    </div>

</x-decor.flip-v>