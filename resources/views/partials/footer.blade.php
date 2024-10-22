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
                        {{ __('Приймальна директора:') }}
                    </span>
                    <div class="flex flex-row w-full gap-2 ml-2 sf:flex-col">
                        <div class="w-1/2 sf:w-full">
                            <div>{{__('Телефон')}}</div>
                            <div>
                                <a href="tel:+380504756847"
                                    class="block text-1.5xl text-gray-900 font-r500 hover:opacity-75 ">
                                    {{__('+38 (050) 475-68-47')}}
                                </a>
                            </div>
                        </div>
                        <div class="w-1/2 sf:w-full">
                            <div>{{__('Електрона аддреса')}}</div>
                            <div>
                                <a href="mailto:director@himpost.com"
                                    class="block text-1.5xl text-gray-900 font-r500 hover:opacity-75 ">
                                    {{__('director@himpost.com')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row items-center order-1 mt-5 sf:flex-col">
                    <div class="w-1/2 ml-2 text-gray-900 text-start font-r400 sf:w-full">
                        {{ __('По всім технологічним, логістичним питанням звертайтесь за') }}
                    </div>
                    <a href="tel:+380503403547" class="w-1/2 block text-1.5xl ml-4 font-r500 sf:w-full lf:text-xl">{{ __('+38 (050)
                        340-35-47') }}</a>
                </div>
                <div class="items-center bg-gray-500 w-full h-[2px] mb-2"></div>
                <div class="items-center bg-gray-500 w-full h-[2px]"></div>
                <div class="flex flex-row justify-start order-1 mt-2">
                    <div class=" text-gray-900 font-r400 text-start text-1.5xl xs:text-sm lf:text-xl">{{ __('Графік роботи:') }}
                    </div>
                    <div class="ml-4 text-lg">
                        <span class="font-r500 text-1.5xl xs:text-sm">{{ __('Пн-Пт:') }} </span>{{ __('с 8:30 до 17:00') }} <span class="font-r500 text-1.5xl xs:text-sm">{{ __('Сб-Нд:') }} </span>{{
                        __('Вихідний') }}</div>
                </div>
            </div>

            <div class="flex flex-col gap-1 sf:px-4">
                <div class="order-1 mt-2">
                    <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl">{{ __('Юридична адреса:') }} </div>
                    <div class="text-lg xs:text-sm">{{ __('82111, Україна, Львівська область
                        вул. Самбірська, 85, Дрогобич') }} </div>
                </div>
                <div class="order-1 mt-2">
                    <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl">{{ __('Фактична адреса:') }} </div>
                    <div class="text-lg xs:text-sm">{{ __('39603, Україна, Полтавська обл.
                        м. Кременчук,
                        вул. Профспілкова, будинок. 11') }} </div>
                </div>
                <div class="order-1 mt-2">
                    <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl">{{ __('м. Київ (Склад):') }} </div>
                    <div class="text-lg xs:text-sm">{{ __('Миколи Хвильового, будинок. 15, мікрорайон Дарницький') }}
                    </div>
                    <div class="flex flex-row justify-start">
                        <div class="text-lg font-r500">{{ __('моб.') }}</div>
                        <a href="tel:+380503482310" class="ml-2 text-lg">{{ __('+38 (050) 348-23-10') }} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>