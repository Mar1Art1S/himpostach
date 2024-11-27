<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_LAK_AKRIL)->get();

name('prod_lak_akril');
?>

@extends('layouts.base')

@section('title', __('Акрилові та акрил-поліуретанові солімери – інноваційні матеріали для покриттів і полімеризації'))
@section('meta_description', __('Відкрийте для себе переваги акрилових та акрил-поліуретанових солімерів у виробництві покриттів і полімерних матеріалів. Висока стійкість, міцність та довговічність для широкого спектру застосувань.'))
@section('meta_keywords', __('акрилові солімери, акрил-поліуретанові солімери, полімерні покриття, поліуретанові солімери,акрилові матеріали для покриттів,
стійкі полімери для покриттів, інноваційні полімери для промисловості'))

@section('og_title', __('Акрилові та акрил-поліуретанові солімери – інноваційні матеріали для покриттів і полімеризації'))
@section('og_description', __('Відкрийте для себе переваги акрилових та акрил-поліуретанових солімерів у виробництві покриттів і полімерних матеріалів. Висока стійкість, міцність та довговічність для широкого спектру застосувань.'))

@section('og_image', Vite::asset('resources/img/mat_5/05.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_acrylic') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_acrylic') }}

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
