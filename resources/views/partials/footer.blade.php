<footer class="grid grid-cols-3">
    <div class="relative block rg:hidden">
        <img src="{{ Vite::asset('resources/img/footer.jpg') }}" class="object-cover w-[680px] h-[420px]" alt="" />
    </div>
    <div class="col-span-3 lg:col-span-2 rg:col-span-3">
        <div class="w-full bg-blue-800 max-h-32 lg:col-span-1 md:max-h-32 md:w-full">
            <a href="{{ route('main') }}">
                <img class="object-contain w-[400px] sf:w-[280px] mx-auto"
                    src="{{ Vite::asset('resources/img/2_logo/Logo_new.png') }}" alt="Logo" />
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 fg:grid-cols-1 sf:px-4">
            <div class="ml-6 ">
                <div class="w-full mt-4 ">
                    <span class="flex justify-start my-2 text-lg tracking-wide text-center text-gray-500 uppercase">
                        {{ __('footer.foo_reception') }}
                    </span>
                    <div class="flex flex-row w-full gap-2 ml-2 sf:flex-col">
                        <div class="w-1/2 sf:w-full">
                            <div>{{__('footer.foo_phone')}}</div>
                            <div>
                                <a href="tel:+380504756847"
                                    class="block text-1.5xl text-gray-900 font-r500 hover:opacity-75 ">
                                    {{__('footer.foo_phone_number')}}
                                </a>
                            </div>
                        </div>
                        <div class="w-1/2 sf:w-full">
                            <div>{{__('footer.foo_address')}}</div>
                            <div>
                                <a href="mailto:director@himpost.com"
                                    class="block text-1.5xl text-gray-900 font-r500 hover:opacity-75 ">
                                    {{__('footer.foo_address_mail')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row items-center order-1 mt-5 sf:flex-col">
                    <div class="w-1/2 ml-2 text-gray-900 text-start font-r400 sf:w-full">
                        {{ __('footer.foo_logistical') }}
                    </div>
                    <a href="tel:+380503403547" class="w-1/2 block text-1.5xl ml-4 font-r500 sf:w-full lf:text-xl">
                        {{ __('footer.foo_logist_num') }}</a>
                </div>
                <div class="items-center bg-gray-500 w-full h-[2px] mb-4"></div>
                <div class="items-center bg-gray-500 w-full h-[2px]"></div>
                <div class="flex flex-row justify-start order-1 mt-2">
                    <div class=" text-gray-900 font-r400 text-start text-1.5xl xs:text-sm lf:text-xl">
                        {{ __('footer.foo_work_schedule') }}
                    </div>
                    <div class="ml-4 text-lg">
                        <span class="font-r500 text-1.5xl xs:text-sm">{{ __('footer.foo_mon_fri') }} </span>
                        {{ __('footer.foo_mon_fri_numb') }} <span class="font-r500 text-1.5xl xs:text-sm">
                            {{ __('footer.foo_sb_nd') }} </span>{{
                        __('footer.foo_weekend') }}</div>
                </div>
            </div>

            <div class="flex flex-col gap-1 sf:px-4">
                <div class="order-1 mt-2">
                    <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl">
                        {{ __('footer.foo_legal') }} </div>
                    <div class="text-lg xs:text-sm">{{ __('footer.foo_legal_addresses') }} </div>
                </div>
                <div class="order-1 mt-2">
                    <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl">
                        {{ __('footer.foo_actual') }} </div>
                    <div class="text-lg xs:text-sm">
                        {{ __('footer.foo_actual_address') }} </div>
                </div>
                <div class="order-1 mt-2">
                    <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl">{{ __('footer.foo_composition') }} </div>
                    <div class="text-lg xs:text-sm">{{ __('footer.foo_composition_address') }}
                    </div>
                    <div class="flex flex-row justify-start">
                        <div class="text-lg font-r500">{{ __('footer.foo_mob') }}</div>
                        <a href="tel:+380503482310" class="ml-2 text-lg">{{ __('footer.foo_mob_numb') }} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>