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
            {{ __('mes.subproduct_top_title_ppy') }}

        </x-slot>

        <x-slot:description>
            {{ __('mes.subproduct_top_description_ppy') }}
        </x-slot>

    </x-category-header>


    <x-section>

        <x-decor.card>
            <x-category-v
                title=" {{ __('mes.category_v_title_ppy_spraying') }}"
                description="{{ __('mes.category_v_description_ppy_spraying') }}"
                image="{{ Vite::asset('resources/img/6_PPU_grup/001.jpeg') }}"
                link="{{ route('prod_ppu_napilennya')}}"
                video_one="{{ '22eQEvQuodk?si=NlPmeucuI7hUylCY' }}"
                video_two="{{ '3vwz2_wXsmM?si=g4AbtniBQVE3Isdq' }}"
                video_three="{{ 'oBR3Z4oW5Q0?si=pkSQdoPB9U4vqZen' }}"
                video_four="{{ 'Vg9XLZEpeec?si=LTGUr_Twgft2evC5' }}"
                video_five="{{ 'glsaZoOXwNM?si=9rWJNpvpWfIbSoZr' }}"
            />
            <x-category-v
                title="{{ __('mes.category_v_title_ppy_shell') }}"
                description="{{ __('mes.category_v_description_ppy_shell') }}"
                image="{{ Vite::asset('resources/img/6_PPU_grup/002.jpeg') }}"
                link="{{ route('prod_ppu_shkarlupi')}}"
                video_one="{{ 'TwJNP9auUjA?si=BGjTF5bDB9mZpjcv' }}"
            />
            <x-category-v
                title="{{ __('mes.category_v_title_insulated_pipes') }}"
                description="{{ __('mes.category_v_description_insulated_pipes') }} "
                image="{{ Vite::asset('resources/img/6_PPU_grup/003.jpeg') }}"
                link="{{ route('prod_ppu_trub')}}"
                video_one="{{ 'S2aVyZC2or8?si=y_k0-F5HJ-O6ieGU' }}"
            />
            <x-category-v
                title="{{ __('mes.category_v_title_ppy_sandwich_panels') }}"
                description="{{ __('mes.category_v_description_ppy_sandwich_panels') }}"
                image="{{ Vite::asset('resources/img/6_PPU_grup/004.jpeg') }}"
                link="{{ route('prod_ppu_sendvich')}}"
                video_one="{{ 'kdcWKgfaAwU?si=D6IcaUZmYUhLmy53' }}"
            />
            <x-category-v
                title=" {{ __('mes.category_v_title_ppy_decor_product') }} "
                description=" {{ __('mes.category_v_description_ppy_decor_product') }} "
                image="{{ Vite::asset('resources/img/6_PPU_grup/005.jpeg') }}"
                link="{{ route('prod_ppu_virobiv') }}"
                video_one="{{ '-sRdI0quOt0?si=5XTSfx9xKx5lgbmt' }}"
            />
            <x-category-v
                title=" {{ __('mes.category_v_title_ppy_coal_massif') }} "
                description=" {{ __('mes.category_v_description_ppy_coal_massif') }} "
                image="{{ Vite::asset('resources/img/6_PPU_grup/006.jpeg') }}"
                link="{{ route('prod_ppu_masivu') }}"
            />
            <x-category-v
                title=" {{ __('mes.category_v_title_ppy_inter_wall_space') }} "
                description=" {{ __('mes.category_v_description_ppy_inter_wall_space') }} "
                image="{{ Vite::asset('resources/img/6_PPU_grup/007.jpeg') }}"
                link="{{ route('prod_ppu_prostoru') }}"
            />
            <x-category-v
                title=" {{ __('mes.category_v_title_ppy_air_filters') }} "
                description=" {{ __('mes.category_v_description_ppy_air_filters') }} "
                image="{{ Vite::asset('resources/img/6_PPU_grup/008.jpeg') }}"
                link="{{ route('prod_ppu_filtriv') }}"
            />
        </x-decor.card>
    </x-section>
@endsection
