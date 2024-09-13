@props(['icon' => null, 'required' => false])

<div class="relative z-20">
    @if ($required)
    <div class="absolute bg-red-500 rounded-full right-2 top-2 size-2 "></div>
    @endif

    @isset($icon)
    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-4">
        @svg('lucide-' . $icon, 'flex-shrink-0 size-6 text-gray-700')
    </div>
    @endisset

    <input {{ $attributes->class([
    'ps-12' => $icon,
    'w-full py-4 p-3 text-gray-500 transition bg-white border-gray-200 rounded-md shadow-sm focus:border-white
    focus:outline-none focus:ring focus:ring-amber-400',
    ]) }}>
</div>