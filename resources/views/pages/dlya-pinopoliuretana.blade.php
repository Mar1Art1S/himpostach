<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('ppy_serovine');
?>

@extends('layouts.base')
@section('title', __('Сировина для пінополіуретану – основа якісного виробництва та ізоляції'))
@section('meta_description', __('Високоякісна сировина для виробництва пінополіуретану. Ізоляційні матеріали з відмінними
характеристиками для будівництва, меблів та інших галузей. Надійність та ефективність в кожному продукті.'))
@section('meta_keywords', __('сировина для пінополіуретану, хімічні компоненти, компоненти для пінополіуретану, сировина для виробництва ППУ, поліол для пінополіуретану'))


@section('og_title', __('Сировина для пінополіуретану – основа якісного виробництва та ізоляції'))
@section('og_description', __('Високоякісна сировина для виробництва пінополіуретану. Ізоляційні матеріали з відмінними характеристиками для будівництва, меблів та інших галузей. Надійність та ефективність в кожному продукті.'))
@section('og_image', Vite::asset('resources/img/categories/001.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('СИРОВИНА ДЛЯ ПІНОПОЛІУРЕТАНА (ППУ)') }}

        </x-slot>

        <x-slot:description>
            {{ __('Сировина для пінополіуретана складається з двох компонентів – поліолу та ізоцианату. Ми виробляємо сировину
            для жорстких пін. Такі піни використовуються для виготовлення теплоізоляційних матеріалів методом напилення або
            наливом у форми, для стабілізації грунтів та вугільних масивів, для вироблення декору та негабарітних
            виробів, наливу між стінами, технічні ізоляційні продукти. Відзначається за високою теплоізоляційною та жорсткою
            властивістю, що робить її популярною у будівництві, автомобільний промисловості, бджільництві,
            гірничобудівної промисловості. ЗБЕРІГАЄ ВЛАСТИВОСТІ ВІД 40 років.') }}
        </x-slot>

    </x-category-header>
    <livewire:search/>

    <x-section>

        <x-decor.card>
            <x-category-v
                title=" {{ __('ППУ для напилення') }}"
                description="{{ __('Сировина для пінополіуретана складається з двох компонентів – поліолу та ізоцианату. Ми виробляємо сировину для жорстких пін') }}"
                image="{{ Vite::asset('resources/img/6_PPU_grup/001.jpeg') }}"
                link="{{ route('prod_ppu_napilennya')}}"
                video_one="{{ '22eQEvQuodk?si=NlPmeucuI7hUylCY' }}"
                video_two="{{ '3vwz2_wXsmM?si=g4AbtniBQVE3Isdq' }}"
                video_three="{{ 'oBR3Z4oW5Q0?si=pkSQdoPB9U4vqZen' }}"
                video_four="{{ 'Vg9XLZEpeec?si=LTGUr_Twgft2evC5' }}"
                video_five="{{ 'glsaZoOXwNM?si=9rWJNpvpWfIbSoZr' }}"
            />
            <x-category-v
                title="{{ __('ППУ для шкарлупи') }}"
                description="{{ __('Застосовується у виробництві теплоізоляційних напівциліндрів (шкарлуп), призначених для теплоізоляції трубопровідних систем теплопостачання та ') }}"
                image="{{ Vite::asset('resources/img/6_PPU_grup/002.jpeg') }}"
                link="{{ route('prod_ppu_shkarlupi')}}"
                video_one="{{ 'TwJNP9auUjA?si=BGjTF5bDB9mZpjcv' }}"
            />
            <x-category-v
                title="{{ __('ППУ попередньо-ізольованих труб') }}"
                description="{{ __('Попередньо ізольовані пінополіуретаном труби є дуже ефективної та сучасної технологією енергозбереження') }} "
                image="{{ Vite::asset('resources/img/6_PPU_grup/003.jpeg') }}"
                link="{{ route('prod_ppu_trub')}}"
                video_one="{{ 'S2aVyZC2or8?si=y_k0-F5HJ-O6ieGU' }}"
            />
            <x-category-v
                title="{{ __('ППУ для заливки Сендвіч-панелей') }}"
                description="{{ __('ППУ широко використовується для виробництва сендвіч-панелей і торговельного холодильного обладнання') }}"
                image="{{ Vite::asset('resources/img/6_PPU_grup/004.jpeg') }}"
                link="{{ route('prod_ppu_sendvich')}}"
                video_one="{{ 'kdcWKgfaAwU?si=D6IcaUZmYUhLmy53' }}"

            />
            <x-category-v
                title=" {{ __('ППУ для декору та негабаритних виробів') }} "
                description=" {{ __('Пінополіуретан (ППУ) може бути використаний для декору та виробів негабаритних розмірів, таких як вулики тощо. ППУ може бути легко формованим') }} "
                image="{{ Vite::asset('resources/img/6_PPU_grup/005.jpeg') }}"
                link="{{ route('prod_ppu_virobiv') }}"
                video_one="{{ '-sRdI0quOt0?si=5XTSfx9xKx5lgbmt' }}"
            />
            <x-category-v
                title=" {{ __('ППУ для зміцнення вугільного масиву, зміцнення фундаментів') }} "
                description=" {{ __('Застосування пінополіуретану (ППУ) для зміцнення вугільного масиву або фундаментів може бути використано в окремих випадках як альтернативний метод') }} "
                image="{{ Vite::asset('resources/img/6_PPU_grup/006.jpeg') }}"
                link="{{ route('prod_ppu_masivu') }}"
                video_one="{{ 'VHqhn12bUc0?si=qR2n3kgnZgEc_A_b' }}"
            />
            <x-category-v
                title=" {{ __('ППУ для заливання міжстінного простору') }} "
                description=" {{ __('Використання пінополіуретану (ППУ) для заливання міжстінного простору є поширеною практикою в будівництві') }} "
                image="{{ Vite::asset('resources/img/6_PPU_grup/007.jpeg') }}"
                link="{{ route('prod_ppu_prostoru') }}"
                video_one="{{ 'VHqhn12bUc0?si=qR2n3kgnZgEc_A_b' }}"
            />
            <x-category-v
                title=" {{ __('ППУ для повітряних фільтрів') }} "
                description=" {{ __('Пінополіуретан (ППУ) використовується для виготовлення повітряних фільтрів завдяки своїм властивостям, таким як висока пористість, міцність і') }} "
                image="{{ Vite::asset('resources/img/6_PPU_grup/008.jpeg') }}"
                link="{{ route('prod_ppu_filtriv') }}"
                video_one="{{ 'VHqhn12bUc0?si=qR2n3kgnZgEc_A_b' }}"
            />
        </x-decor.card>
    </x-section>
@endsection
