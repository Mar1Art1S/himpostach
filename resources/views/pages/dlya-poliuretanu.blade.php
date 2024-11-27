<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_serovine');
?>

@extends('layouts.base')

@section('title', __('Сировина для поліуретану'))
@section('meta_description', __('Широкий вибір сировини для виробництва поліуретану. Надійні компоненти для створення
міцних,
еластичних і довговічних поліуретанових виробів. Оптимальні рішення для будівництва, промисловості та інших галузей.'))
@section('meta_keywords', __('сировина для поліуретану, компоненти для поліуретану, поліол та ізоціанат, поліуретанові
матеріали,
поліуретанова система, виробництво поліуретану, поліуретанові компоненти, хімічні речовини для поліуретану'))


@section('og_title', __('Сировина для поліуретану'))
@section('og_description', __('Широкий вибір сировини для виробництва поліуретану. Надійні компоненти для створення
міцних,
еластичних і довговічних поліуретанових виробів. Оптимальні рішення для будівництва, промисловості та інших галузей.'))
@section('og_image', Vite::asset('resources/img/categories/002.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.subproduct_top_title_py') }}

        </x-slot>

        <x-slot:description>
            {{ __('mes.subproduct_top_description_py') }}

        </x-slot>
    </x-category-header>

    <x-section>
        <x-decor.card>
            <x-category-v
                    title=" {{ __('mes.category_v_title_py_injection_molding') }}"
                    description="{{ __('mes.category_v_description_py_injection_molding') }}"
                    image="{{ Vite::asset('resources/img/mat_2/01.jpg') }}"
                    link="{{ route('prod_pu_livarnij') }}"
                    video_one="{{ 'hhkZFJQwQmc?si=lnbvXBkrxqyZfzXi' }}"

            />
            <x-category-v
                    title=" {{ __('mes.category_v_title_py_leveling_floors') }}"
                    description="{{ __('mes.category_v_description_py_leveling_floors') }}"
                    image="{{ Vite::asset('resources/img/mat_2/02.jpg') }}"
                    link="{{ route('prod_pu_pidlogi') }}"

            />
            <x-category-v
                    title=" {{ __('mes.category_v_title_py_elastomers') }}"
                    description="{{ __('mes.category_v_description_py_elastomers') }}"
                    image="{{ Vite::asset('resources/img/mat_2/03.jpg') }}"
                    link="{{ route('prod_pu_elastomiri') }}"
                    video_one="{{ 'Gtbn_KSweLY?si=Z9yzD9QhkwdJbezB' }}"
            />
            <x-category-v
                    title=" {{ __('mes.category_v_title_py_paste') }}"
                    description="{{ __('mes.category_v_description_py_paste') }}"
                    image="{{ Vite::asset('resources/img/mat_2/04.jpg') }}"
                    link="{{ route('prod_pu_pasta') }}"

            />
            <x-category-v
                    title=" {{ __('mes.category_v_title_py_pigment_pastes') }}"
                    description="{{ __('mes.category_v_description_py_pigment_pastes') }}"
                    image="{{ Vite::asset('resources/img/mat_2/05.jpg') }}"
                    link="{{ route('prod_pu_pigment') }}"
                    video_one="{{ 'njCuAvQ_YNc?si=uEVedbemEHlwVsC0' }}"
            />
        </x-decor.card>
    </x-section>
@endsection
