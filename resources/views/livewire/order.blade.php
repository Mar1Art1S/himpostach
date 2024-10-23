<div>
    @session('order-success')
    <div class="text-center">
        <x-lucide-smile class="mx-auto mb-3 size-16" />
        <p>Дякуємо, запитання успішно надіслано!</p>
        <p>Наш менеджер зв'яжеться з Вами найближчим часом</p>
{{--        <p>Номер Замовлення: <span class="font-bold">№10546</span></p>--}}
        <x-button class="mt-5" @click="modalOpen=false" type="button">{{ __('Закрити') }}</x-button>
    </div>
    @else
    <form wire:submit='save'>


        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5">
            <div class="space-y-4 ">
                <x-input placeholder="Ваше ФІО" wire:model.blur='order.fio' required />
                @error('order.fio')
                <x-error>{{ $message }}</x-error>
                @enderror

                <x-input placeholder="Пошта або телефон" wire:model='order.contact' required />
                @error('order.contact')
                <x-error>{{ $message }}</x-error>
                @enderror

                <x-input placeholder="Місто" wire:model='order.city' />
                @error('order.city')
                <x-error>{{ $message }}</x-error>
                @enderror
            </div>

            <div class="mt-4 space-y-4 lg:mt-0">
                <x-textarea class="h-full" placeholder="Додатковий опис" wire:model='order.description' rows="5" />
                @error('order.description')
                <x-error>{{ $message }}</x-error>
                @enderror
            </div>
        </div>

        <input type="hidden" wire:model='order.product' value="{{ $product }}" />

        <div class="flex flex-row justify-between mt-8 gap-y-4">
            <x-button @click="modalOpen=false" type="button">
                {{ __('Відмінити') }}
                <x-lucide-ban class="inline-block size-5 ms-1" />
            </x-button>
            <x-button type="submit">
                {{ __('Відправити') }}
                <x-lucide-shopping-cart class="inline-block size-5 ms-1" />
            </x-button>
        </div>
    </form>
    @endsession
</div>
