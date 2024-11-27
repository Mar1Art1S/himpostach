<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_LAK_ANTIS)->get();

name('prod_lak_antis');
?>

@extends('layouts.base')

@section('title', __('Антисептики для тканин, шпагатів та органічних матеріалів – захист від мікроорганізмів'))
@section('meta_description', __('Забезпечте надійний захист тканин, шпагатів та органічних матеріалів від цвілі,
грибків та бактерій з ефективними антисептиками. Продукти для збереження якості та довговічності ваших матеріалів.'))
@section('meta_keywords', __('Антисептики для тканин, антисептики для шпагатів, антисептики для органічних матеріалів,
захист тканин від мікроорганізмів, антисептичні засоби для органіки, захист шпагатів від цвілі, антисептики проти грибка для тканин'))


@section('og_title', __('Антисептики для тканин, шпагатів та органічних матеріалів – захист від мікроорганізмів'))
@section('og_description', __('Антисептики для тканин, антисептики для шпагатів, антисептики для органічних матеріалів'))

@section('og_image', Vite::asset('resources/img/mat_5/03.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_antiseptics') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_antiseptics') }}

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
