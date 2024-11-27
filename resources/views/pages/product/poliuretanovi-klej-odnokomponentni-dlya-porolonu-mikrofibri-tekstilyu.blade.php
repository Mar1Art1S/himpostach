<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_TEKSTILYU)->get();

name('prod_klej_tekstilyu');
?>

@extends('layouts.base')

@section('title', __('Однокомпонентні поліуретанові клеї для поролону, мікрофібри та текстилю – надійне склеювання для м`яких матеріалів'))
@section('meta_description', __('Однокомпонентні поліуретанові клеї ідеально підходять для склеювання поролону, мікрофібри та текстилю.
Забезпечують міцне з`єднання, що відзначається високою еластичністю, стійкістю до зношування та довговічністю. Ідеальні для застосування
у виробництві меблів, матраців, оббивки та інших виробів, де потрібне надійне склеювання м`яких матеріалів.'))
@section('meta_keywords', __('поліуретанові клеї для поролону, клей для мікрофібри та текстилю, однокомпонентний клей для м`яких матеріалів,
клей для виробництва матраців, клей для оббивки меблів, поліуретановий клей для текстилю, клей для склеювання поролону,
надійне склеювання м`яких матеріалів'))


@section('og_title', __('Однокомпонентні поліуретанові клеї для поролону, мікрофібри та текстилю – надійне склеювання для м`яких матеріалів'))
@section('og_description', __('Однокомпонентні поліуретанові клеї ідеально підходять для склеювання поролону, мікрофібри та текстилю.
Забезпечують міцне з`єднання, що відзначається високою еластичністю, стійкістю до зношування та довговічністю. Ідеальні для застосування
у виробництві меблів, матраців, оббивки та інших виробів, де потрібне надійне склеювання м`яких матеріалів.'))

@section('og_image', Vite::asset('resources/img/mat_4/04.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_microfiber') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_microfiber') }}

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
