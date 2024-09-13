@props(['image', 'title'])

<div class="flex rounded-2xl flex-wrap text-center w-[300px] h-[100px] mt-[120px] justify-center ">
    <div class="flex items-center justify-center -mt-16 rounded-full w-36 h-36 bg-amber-100">
        <img class="w-20 h-20" src="{{ $image }}" alt="">
    </div>
    <div class="flex flex-col items-center justify-center text-center">
        <h4 class="uppercase my-5 text-1.5xl px-1 text-zinc-100">
            {{ $title }}
        </h4>
    </div>
</div>
