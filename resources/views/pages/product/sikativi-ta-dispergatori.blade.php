<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_LAK_SIKATIVI)->get();

name('prod_lak_sikativi');
?>

@extends('layouts.base')

@section('title', __('Сикативи та диспергатори – ефективні добавки для лакофарбових матеріалів'))
@section('meta_description', __('Сикативи та диспергатори для покращення властивостей лакофарбових матеріалів.
Забезпечте швидке висихання, однорідність покриття та підвищену стабільність складу з нашими високоякісними добавками.
Ідеальні для промислового застосування та виробництва фарб.'))
@section('meta_keywords', __('сикативи для фарб, диспергатори для лакофарбових матеріалів, прискорювачі висихання для фарб,
стабілізатори для лакофарбових складів, сикативи для лакофарбової продукції, диспергуючі добавки для фарб'))


@section('og_title', __('Сикативи та диспергатори – ефективні добавки для лакофарбових матеріалів'))
@section('og_description', __('Сикативи та диспергатори для покращення властивостей лакофарбових матеріалів.
Забезпечте швидке висихання, однорідність покриття та підвищену стабільність складу з нашими високоякісними добавками.
Ідеальні для промислового застосування та виробництва фарб.'))

@section('og_image', Vite::asset('resources/img/mat_5/01.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_sicavatives') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_sicavatives') }}
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
