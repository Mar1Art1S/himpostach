@extends('layouts.base')
@section('title', __('Хімічна сировина'))
@section('meta_description', __('Хімічна сировина для виробництва поліуретану та пінополіуретану, лакофарбових
матеріалів, клеїв і гідроізоляційних покриттів, що застосовується в будівництві, меблевій та автомобільній
промисловості, забезпечуючи стійкість, ізоляцію та довговічність матеріалів'))
@section('meta_keywords', __('хімічна сировина, поліуретан, пінополіуретан, лакофарбові матеріали, клейові матеріали,
гідроізоляція, поліуретанові матеріали, пінополіуретанові продукти, лакофарбові покриття, клеї та герметики, матеріали
для гідроізоляції'))


@section('og_title', __('Хімічна сировина'))
@section('og_description', __('Хімічна сировина для виробництва поліуретану та пінополіуретану, лакофарбових матеріалів,
клеїв і гідроізоляційних покриттів, що застосовується в будівництві, меблевій та автомобільній промисловості,
забезпечуючи стійкість, ізоляцію та довговічність матеріалів'))
@section('og_image', Vite::asset('resources/img/mat_6/1.jpg'))
@section('content')
<div class="my-12 ">
    <div class="container mx-auto">
        <h2 class="text-5xl text-center text-gray-900 font-r500">{{ __('about.title_about') }}</h2>
    </div>
    <div class="flex justify-center my-8 w-[1680]">
        <div class="flex flex-row w-full md:flex-col ">
            <div class="w-1/3 md:w-full md:justify-center md:flex">
                <img decoding="async" class="h-[600px] tg:h-auto rounded-xl mx-12 md:h-[500px]"
                    src="{{ Vite::asset('resources/img/mat_6/1.jpg') }}" alt="">
            </div>
            <div class="w-2/3 md:w-full">
                <div
                    class="flex w-full px-12 ml-8 text-2xl leading-9 justify-left tg:text-1.5xl tg:leading-[28px] fg:text-lg">
                    {{ __('about.paragraph_text_one') }}
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center my-8 w-[1680]">
        <div class="flex flex-row w-full md:flex-col ">
            <div class="w-full">
                <div
                    class="flex w-full px-12 ml-8 text-2xl leading-9 justify-left tg:text-1.5xl tg:leading-[28px] fg:text-lg">
                    {{ __('about.paragraph_text_two') }}
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center my-8 w-[1680]">
        <div class="flex flex-row w-full md:flex-col ">
            <div class="w-1/3 md:w-full md:justify-center md:flex">
                <img decoding="async" class="h-[600px] tg:h-auto rounded-xl mx-12 md:h-[500px]"
                    src="{{ Vite::asset('resources/img/mat_6/7.jpg') }}" alt="">
            </div>
            <div class="w-2/3 md:w-full">
                <div
                    class="flex w-full px-12 ml-8 text-2xl leading-9 justify-left tg:text-1.5xl tg:leading-[28px] fg:text-lg">
                    {{ __('about.paragraph_text_three') }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
