<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_LAK_KATALIZ)->get();

name('prod_lak_kataliz');
?>

@extends('layouts.base')

@section('title', __('Каталізатори для поліуретанової піни – ефективні рішення для виробництва'))
@section('meta_description', __('Дізнайтеся, як каталізатори впливають на швидкість і якість полімеризації поліуретанової піни. Широкий вибір каталізаторів для різних застосувань у виробництві та будівництві.'))
@section('meta_keywords', __('каталізатори для поліуретанової піни, каталізатори полімеризації, каталізатори виробництво поліуретан,
каталізатори для будівництва, ефективні каталізатори поліуретан'))


@section('og_title', __('Каталізатори для поліуретанової піни – ефективні рішення для виробництва'))
@section('og_description', __('Дізнайтеся, як каталізатори впливають на швидкість і якість полімеризації поліуретанової піни. Широкий вибір каталізаторів для різних застосувань у виробництві та будівництві.'))

@section('og_image', Vite::asset('resources/img/mat_5/02.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_catalysts') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_catalysts') }}

        </x-slot>

    </x-category-header>
    <livewire:search/>

    <x-section>
        <x-decor.card>
            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach

        </x-decor.card>
    </x-section>
@endsection
