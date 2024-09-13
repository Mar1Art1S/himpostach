<button {{ $attributes->class('inline-block px-12 m-2 py-3 text-sm text-white border border-white rounded bg-amber-400
    font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white
    disabled:opacity-75')->merge(['type' => 'button']) }}>
    {{ $slot }}
    <x-lucide-loader class="inline-block ms-2 animate-spin size-6" wire:loading />
</button>