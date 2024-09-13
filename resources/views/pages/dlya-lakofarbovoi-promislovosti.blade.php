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
            {{ __('СИРОВИНА ДЛЯ ЛАКОФАРБОВОЇ ПРОМИСЛОВОСТІ') }}

        </x-slot>

        <x-slot:description>
            {{ __('Сировина для лакофарбової промисловості включає в себе різноманітні компоненти, необхідні для виробництва фарб,
        лаків та покриттів. Основні складові включають пігменти, розчинники, смоли та добавки. Пігменти надають фарбі або
         лаку барву та покривні властивості, розчинники використовуються для розведення смол та забезпечення потрібної
         консистенції, а смоли формують основу покриття та відповідають за його міцність та стійкість. Добавки можуть включати
          антиоксиданти, антибактеріальні агенти та інші речовини, які покращують характеристики фарби або лаку. Важливо
            відзначити, що використання правильних сировинних матеріалів впливає на якість та характеристики готового продукту,
         що виготовляється в лакофарбовій промисловості.') }}

        </x-slot>

    </x-category-header>
    <livewire:search/>

    <x-section>

        <x-decor.card>
            <x-category-v
                title=" {{ __('Сикативи та диспергатори') }}"
                description="{{ __('Сикативи та диспергатори - це речовини, які використовуються у різних галузях, зокрема у фармацевтиці, хімічній промисловості') }}"
                image="{{ Vite::asset('resources/img/mat_5/01.jpg') }}"
                link="{{ route('prod_lak_sikativi') }}"
                link_two="{{ 'https://www.youtube.com/@user-me9lc4ho6b' }}"
            />
            <x-category-v
                title=" {{ __('Каталізатори') }}"
                description="{{ __('Каталізатори - це речовини, які прискорюють хімічні реакції, не змінюючи своєї власної структури під час процесу. Вони використовуються в широкому спектрі') }}"
                image="{{ Vite::asset('resources/img/mat_5/02.jpg') }}"
                link="{{ route('prod_lak_kataliz') }}"
                link_two="{{ 'https://www.youtube.com/@user-me9lc4ho6b' }}"
            />
            <x-category-v
                title=" {{ __('Антисептики') }}"
                description="{{ __('Антисептики - це речовини або засоби, які використовуються для знищення або інгібування мікробів на поверхнях шкіри, ран або') }}"
                image="{{ Vite::asset('resources/img/mat_5/03.jpg') }}"
                link="{{ route('prod_lak_antis') }}"
                link_two="{{ 'https://www.youtube.com/@user-me9lc4ho6b' }}"
            />
            <x-category-v
                title=" {{ __('Смоли алкідно-модифіковані та бутоксильовані') }}"
                description="{{ __('Смоли алкідно-модифіковані та бутоксильовані знаходять широке використання у різних галузях промисловості, включаючи') }}"
                image="{{ Vite::asset('resources/img/mat_5/04.jpg') }}"
                link="{{ route('prod_lak_smoli') }}"
                link_two="{{ 'https://www.youtube.com/@user-me9lc4ho6b' }}"
            />
            <x-category-v
                title=" {{ __('Акрилові та акрил-поліуретанові сополімери') }}"
                description="{{ __('Акрилові та акрил-поліуретанові сополімери використовуються у широкому спектрі застосувань, включаючи виробництво фарб') }}"
                image="{{ Vite::asset('resources/img/mat_5/05.jpg') }}"
                link="{{ route('prod_lak_akril') }}"
                link_two="{{ 'https://www.youtube.com/@user-me9lc4ho6b' }}"
            />
        </x-decor.card>
    </x-section>
@endsection





