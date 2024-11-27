<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_lak_prom');
?>
@extends('layouts.base')
@section('title', __('Сировина для лакофарбової промисловості – якість і надійність для виробництва'))
@section('meta_description', __('Високоякісна сировина для лакофарбової промисловості: пігменти, смоли,
розчинники та інші матеріали. Гарантоване покриття, стійкість та довговічність продукції для різних галузей.'))
@section('meta_keywords', __('сировина для лакофарбової промисловості, пігменти для лаків і фарб, смоли для лакофарбової продукції,
розчинники для фарб, матеріали для лакофарбового виробництва, компоненти для лакофарбової продукції, якісна сировина для фарб'))


@section('og_title', __('Сировина для лакофарбової промисловості – якість і надійність для виробництва'))
@section('og_description', __('Високоякісна сировина для лакофарбової промисловості: пігменти, смоли,
розчинники та інші матеріали. Гарантоване покриття, стійкість та довговічність продукції для різних галузей.'))

@section('og_image', Vite::asset('resources/img/categories/007.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.subproduct_top_title_paint') }}

        </x-slot>

        <x-slot:description>
            {{ __('mes.subproduct_top_description_paint') }}

        </x-slot>

    </x-category-header>


    <x-section>

        <x-decor.card>
            <x-category-v
                title=" {{ __('mes.category_v_title_py_dispersants') }}"
                description="{{ __('mes.category_v_description_py_dispersants') }}"
                image="{{ Vite::asset('resources/img/mat_5/01.jpg') }}"
                link="{{ route('prod_lak_sikativi') }}"
                video_one="{{ 'm5PXt2VmMFI?si=c4-dkIqA_SkYSVcp' }}"
            />
            <x-category-v
                title=" {{ __('mes.category_v_title_py_сatalysts') }}"
                description="{{ __('mes.category_v_description_py_сatalysts') }}"
                image="{{ Vite::asset('resources/img/mat_5/02.jpg') }}"
                link="{{ route('prod_lak_kataliz') }}"

            />
            <x-category-v
                title=" {{ __('mes.category_v_title_py_antiseptics') }}"
                description="{{ __('mes.category_v_description_py_antiseptics') }}"
                image="{{ Vite::asset('resources/img/mat_5/03.jpg') }}"
                link="{{ route('prod_lak_antis') }}"

            />
            <x-category-v
                title=" {{ __('mes.category_v_title_py_butoxylated') }}"
                description="{{ __('mes.category_v_description_py_butoxylated') }}"
                image="{{ Vite::asset('resources/img/mat_5/04.jpg') }}"
                link="{{ route('prod_lak_smoli') }}"
                video_one="{{ 'PwxuGiXNAH4?si=h02HfDycTtzYom8n' }}"
            />
            <x-category-v
                title=" {{ __('mes.category_v_title_py_copolymers') }}"
                description="{{ __('mes.category_v_description_py_copolymers') }}"
                image="{{ Vite::asset('resources/img/mat_5/05.jpg') }}"
                link="{{ route('prod_lak_akril') }}"
                video_one="{{ 'HYDhc8IzRyA?si=1b_sju31jpsN9jjt' }}"
            />
        </x-decor.card>
    </x-section>
@endsection





