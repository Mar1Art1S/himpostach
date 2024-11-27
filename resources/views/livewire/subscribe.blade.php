<div class="bg-gray-200">
    @session('subscribe-success')
    <div class="p-4 md:p-12 lg:px-16 lg:py-16">
        <div class="flex flex-col justify-center w-full text-center">
            <x-lucide-smile class="mx-auto mb-5 text-amber-500 size-20" />
            <span class="text-xl text-gray-800 font-r700">{{ __('subscription.sub_thank') }} </span>
            <span class="text-xl text-gray-800 font-r700">{{__('subscription.sub_completed')}}</span>
        </div>
    </div>
    @else
    <div class="py-16">
        <div class="w-full mb-8 text-center">
            <h2 class="text-4xl leading-10 text-gray-900 font-r700 md:text-3xl">
                {{ __('subscription.sub_news') }}
            </h2>
        </div>

        <div class="max-w-3xl mx-auto mt-4">
            <form wire:submit='save' class="flex sm:flex sm:gap-4 sm:flex-col ">
                <div class="w-3/4 px-5 sm:w-full">
                    <label class="sr-only">{{ __('subscription.sub_email') }}</label>
                    <x-input placeholder="{{ __('subscription.sub_specify') }}" wire:model='form.email' />

                    @error('form.email')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <x-button type="submit"
                    class="inline-flex items-center px-6 py-2 text-white border-0 rounded focus:outline-none hover:bg-indigo-600 sm:w-auto sm:mx-5 sm:justify-center"
                    wire:target='save' wire:loading.attr='disabled'>
                    <span class="text-sm font-r500">{{ __('subscription.sub_subscribe') }}</span>
                    <x-lucide-move-right class="inline-block size-6 ms-2" wire:loading.class='hidden' />
                </x-button>
            </form>
        </div>
    </div>
    @endsession
</div>