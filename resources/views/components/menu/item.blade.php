@props(['link', 'active' => false])

<li {{ $attributes->class([
    'bg-amber-500/90 bg-transparent rounded-lg fg:bg-amber-400 h-20 justify-center flex items-center',
    'font-bold' => $active,
    ]) }}>
    <a class="text-2xl text-white uppercase font-r300 hover:text-amber-500 xs:text-xl" href="{{ $link }}">
        {{ $slot }}
    </a>
</li>