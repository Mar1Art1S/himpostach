@props(['title', 'description'])

<div class="relative w-full bg-gray-50">
    <div class="flex flex-row py-8 mf:flex-col mf:justify-center mf:items-center">
        <h1 {{ $title->attributes->class('pl-3 font-r900 text-gray-400 text-[54px] leading-[77px] text-left uppercase
            w-1/3
            rg:text-[28px] rg:leading-[60px] tg:w-1/3 fg:text-4xl fg:w-1/2 mf:w-full mf:text-center sm:text-2xl
            sm:leading-9') }}>
            {{ $title }}

        </h1>
        <div {{ $description->attributes->class('w-2/3 text-xl text-left leading-[33px] text-gray-400 px-2
            rg:text-base rg:leading-8 tg:text-sm tg:w-3/5 mf:w-full sm:text-center
            sm:py-3 sm:leading-6') }}>
            {{ $description }}

        </div>
    </div>
</div>