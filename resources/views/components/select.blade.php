@props(['placeholder', 'options' => null])

<div x-data="{
        isOpen: false,
        openedWithKeyboard: false,
        selectedItem: null
    }"
     class="relative"
     @keydown.esc.window="isOpen = false, openedWithKeyboard = false">

    <!-- Hidden Input to store the selected category -->
    <input type="hidden" name="selected_category" :value="selectedItem ? selectedItem.name : ''">

    <!-- Toggle Button -->
    <button x-ref="selectButton" @click="isOpen = ! isOpen" type="button"
            :class="{ 'focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400': !isOpen }"
            class="relative min-h-[38px] flex items-center justify-between w-full py-4 pl-3 pr-10 text-left bg-white border rounded-md shadow-sm cursor-default border-neutral-200/70 focus:outline-none text-sm">
        <span x-text="selectedItem ? selectedItem.name : '{{ $placeholder }}'" class="truncate">{{ $placeholder }}</span>
        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                 class="w-5 h-5 text-gray-400">
                <path fill-rule="evenodd"
                      d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                      clip-rule="evenodd"></path>
            </svg>
        </span>
    </button>

    <!-- Dropdown Menu -->
    <div x-cloak x-show="isOpen || openedWithKeyboard"
         x-transition x-trap="openedWithKeyboard"
         @click.outside="isOpen = false, openedWithKeyboard = false"
         @keydown.down.prevent="$focus.wrap().next()"
         @keydown.up.prevent="$focus.wrap().previous()"
         class="absolute top-11 left-0 flex w-full min-w-[12rem] flex-col overflow-hidden rounded-xl bg-white py-1.5 hover:text-neutral-700"
         role="menu">
        @isset($options)
            @foreach ($options as $option)
                <a href="#"
                   @click.prevent="selectedItem = { name: '{{ $option->name }}' }; isOpen = false; openedWithKeyboard = false;"
                   class="px-4 py-2 text-sm bg-white text-neutral-500 hover:bg-neutral-800/5 hover:text-neutral-700 focus-visible:bg-neutral-800/10 focus-visible:text-neutral-700 focus-visible:outline-none"
                   role="menuitem">
                    {{ $option->name }}
                </a>
            @endforeach
        @endisset
    </div>
</div>
