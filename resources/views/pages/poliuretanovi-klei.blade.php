<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_klei');
?>

@extends('layouts.base')

@section('title', __('Поліуретанові клеї – надійне рішення для міцного з`єднання матеріалів'))
@section('meta_description', __('Високоякісні поліуретанові клеї для міцного та довговічного з`єднання різних матеріалів.
Ідеально підходять для будівництва, меблів, автоіндустрії та інших сфер. Стійкість до вологи, температури та механічних навантажень.'))
@section('meta_keywords', __('поліуретановий клей, клей для міцного з`єднання, поліуретановий клей для будівництва,
поліуретановий клей для меблів, стійкі поліуретанові клеї, клей для з`єднання матеріалів, водостійкі поліуретанові клеї'))


@section('og_title', __('Поліуретанові клеї – надійне рішення для міцного з`єднання матеріалів'))
@section('og_description', __('Високоякісні поліуретанові клеї для міцного та довговічного з`єднання різних матеріалів.
Ідеально підходять для будівництва, меблів, автоіндустрії та інших сфер. Стійкість до вологи, температури та механічних навантажень.'))
@section('og_image', Vite::asset('resources/img/categories/004.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.subproduct_top_title_py_glue') }}

        </x-slot>

        <x-slot:description>
            {{ __('mes.subproduct_top_description_py_glue') }}
        </x-slot>

    </x-category-header>


    <x-section>
        <x-decor.card>
            <x-category-v
                title=" {{ __('mes.category_v_title_glue_epdm') }}"
                description="{{ __('mes.category_v_description_glue_epdm') }}"
                image="{{ Vite::asset('resources/img/mat_4/01.jpg') }}"
                link="{{ route('prod_klej_krihti') }}"

            />
            <x-category-v
                title=" {{ __('mes.category_v_title_glue_d4_wood') }}"
                description="{{ __('mes.category_v_description_glue_d4_wood') }}"
                image="{{ Vite::asset('resources/img/mat_4/02.jpg') }}"
                link="{{ route('prod_klej_dereva_d4') }}"

            />
            <x-category-v
                title=" {{ __('mes.category_v_title_glue_clinker_thermal_panels') }}"
                description="{{ __('mes.category_v_description_glue_clinker_thermal_panels') }}"
                image="{{ Vite::asset('resources/img/mat_4/03.jpg') }}"
                link="{{ route('prod_klej_sendvich') }}"
                video_one="{{ 'mgQP2OUBN7U?si=KR6H0Is7s1OHX-lr' }}"
                video_two="{{ 'm1UBoCoopcE?si=q-Pe7I8TNGDuj7_r' }}"
            />
            <x-category-v
                title=" {{ __('mes.category_v_title_glue_foam_textiles') }}"
                description="{{ __('mes.category_v_description_glue_foam_textiles') }}"
                image="{{ Vite::asset('resources/img/mat_4/04.jpg') }}"
                link="{{ route('prod_klej_tekstilyu') }}"

            />
            <x-category-v
                title=" {{ __('mes.category_v_title_glue_bulk_materials') }}"
                description="{{ __('mes.category_v_description_glue_bulk_materials') }}"
                image="{{ Vite::asset('resources/img/mat_4/05.jpg') }}"
                link="{{ route('prod_klej_budivelnih') }}"

            />
            <x-category-v
                title=" {{ __('mes.category_v_title_glue_parquet') }}"
                description="{{ __('mes.category_v_description_glue_parquet') }}"
                image="{{ Vite::asset('resources/img/mat_4/06.jpg') }}"
                link="{{ route('prod_klej_parketu') }}"
                video_one="{{ 'oFXAYIwb2lw?si=o4fNi96jVLNELfkt' }}"
            />
            <x-category-v
                title=" {{ __('mes.category_v_title_glue_artificial_grass') }}"
                description="{{ __('mes.category_v_description_glue_artificial_grass') }}"
                image="{{ Vite::asset('resources/img/mat_4/07.jpg') }}"
                link="{{ route('prod_klej_travi') }}"

            />
            <x-category-v
                title=" {{ __('mes.category_v_title_glue_paper_cardboard') }}"
                description="{{ __('mes.category_v_description_glue_paper_cardboard') }}"
                image="{{ Vite::asset('resources/img/mat_4/08.jpg') }}"
                link="{{ route('prod_klej_kartonu') }}"

            />
        </x-decor.card>
    </x-section>
@endsection
