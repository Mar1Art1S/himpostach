@extends('layouts.base')

@section('content')
<section class="relative text-gray-600 body-font">
    <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" allowfullscreen="" loading="lazy"
            marginwidth="0" title="map" scrolling="no"
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d653.0928705077037!2d33.39678326967825!3d49.09858287631153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDnCsDA1JzU0LjkiTiAzM8KwMjMnNTAuNyJF!5e0!3m2!1suk!2sua!4v1724927683320!5m2!1suk!2sua"
            style="border:0;"></iframe>

    </div>
    <div class="container flex px-5 py-24 mx-auto">
        <div class="relative z-10 flex flex-col w-full p-8 mt-10 bg-white opacity-85 rounded-lg shadow-md lg:w-[760px]">

            <div class="">
                <span class="flex justify-center my-2 text-1.5xl tracking-wide text-center text-gray-500 uppercase">
                    {{ __('Приймальна директора:') }}
                </span>
                <div class="flex flex-row w-full mt-4 mf:flex-col">

                    <div class="flex flex-col w-1/2 gap-2 ml-2 mf:w-full">

                        <div>{{__('Телефон')}}</div>

                        <a href="tel:+380504756847"
                            class="block text-1.5xl text-gray-900 font-r500 hover:opacity-75 sm:text-2xl xs:text-base">
                            +38 (050) 475-68-47
                        </a>
                    </div>
                    <div class="flex flex-col w-1/2 gap-2 ml-2 mf:w-full">
                        <div>{{__('Електрона аддреса')}}</div>
                        <div>
                            <a href="mailto:director@himpost.com"
                                class="block text-1.5xl text-gray-900 font-r500 hover:opacity-75 sm:text-2xl xs:text-base">
                                director@himpost.com
                            </a>
                        </div>
                    </div>
                </div>


                <div class="w-full h-[2px] bg-blue-600"></div>
                <div class="flex flex-row justify-start order-1 my-8 mf:flex-col">

                    <div class=" text-gray-900 font-r400 text-start text-1.5xl  xs:text-xl">{{ __('Графік роботи:') }}
                    </div>
                    <div class="ml-4 text-lg"><span class="font-r500 text-1.5xl xs:text-base">{{ __('Пн-Пт:') }} </span>
                        {{
                        __('с
                        8:30 до 17:00') }} <span class="font-r500 text-1.5xl xs:text-base">{{ __('Сб-Нд:') }} </span>{{
                        __('Вихідний') }}</div>
                </div>
                <div class="w-full h-[2px] bg-blue-600"></div>
                <div class="flex flex-col gap-1">
                    <div class="order-1 mt-2">
                        <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl xs:text-lg">{{ __('Юридична
                            адреса:') }}
                        </div>
                        <div class="text-lg xs:text-sm">{{ __('82111, Україна, Львівська область
                            вул. Самбірська, 85, Дрогобич') }} </div>
                    </div>
                    <div class="order-1 mt-2">
                        <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl xs:text-lg">{{ __('Фактична
                            адреса:') }}
                        </div>
                        <div class="text-lg xs:text-sm">{{ __('39603, Україна, Полтавська обл.
                            м. Кременчук,
                            вул. Профспілкова, будинок.11') }} </div>
                    </div>
                    <div class="order-1 mt-2">
                        <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl xs:text-lg">{{ __('м. Київ
                            (Склад):') }}
                        </div>
                        <div class="text-lg xs:text-sm">{{ __('Миколи Хвильового, будинок. 15, мікрорайон Дарницький')
                            }}
                        </div>
                        <div class="flex flex-row justify-start">
                            <div class="text-lg font-r500 xs:text-lg">{{ __('моб.') }}</div>
                            <div class="ml-2 text-lg xs:text-xs">{{ __('+38 (050) 348-23-10') }} </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</section>
@endsection