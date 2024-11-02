@props(['image', 'title', 'description', 'link'])

<x-decor.flip>
    {{-- Front side for non-xs screens --}}
    <div class="relative front xs:hidden">
        <img class="absolute" src="{{ $image }}" alt="" />
        <h3
                class="absolute pl-5 leading-[40px] text-3xl font-r900 bg-slate-800 bg-opacity-50 w-[400px] h-[400px] uppercase lf:w-[300px] lf:h-[300px] lf:text-2xl">
            {{ $title }}
        </h3>
    </div>

    {{-- Back side for non-xs screens --}}
    <div class="back xs:hidden">
        <h4 class="pt-5 text-1.5xl leading-[28px] font-r700 text-center">
            {{ $title }}
        </h4>
        <p class="py-10 text-1.5xl font-r400 m-2 leading-[24px] text-center lf:py-4 lf:text-base lf:leading-[16px]">
            {{ $description }}
        </p>
        <div class="flex items-center justify-center">
            <a class="inline-block px-12 py-3 text-sm text-white border border-white rounded font-r400 bg-amber-400 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white"
               href="{{ $link }}">
                {{ __('Далі') }}
            </a>
        </div>
    </div>
</x-decor.flip>

{{-- xs screen version --}}
<div class="hidden xs:block xs:relative xs:w-[350px] xs:h-[350px]">
    <img class="xs:absolute xs:w-full xs:h-full" src="{{ $image }}" alt="" />

    {{-- Title positioned at the top of the card --}}
    <h3 class="xs:absolute xs:top-0 xs:bg-slate-800 xs:bg-opacity-50 xs:w-full xs:text-2xl xs:font-r900 xs:uppercase xs:text-center xs:text-white">
        {{ $title }}
    </h3>

    {{-- Button positioned at the bottom of the card --}}
    <div class="xs:absolute xs:bottom-5 xs:w-full xs:flex xs:justify-center">
        <a class="xs:rounded xs:px-6 xs:py-2 xs:text-sm xs:text-white xs:font-r400 xs:bg-amber-400 xs:hover:bg-transparent xs:hover:text-white focus:outline-none focus:ring active:text-white"
           href="{{ $link }}">
            {{ __('Далі') }}
        </a>
    </div>
</div>


