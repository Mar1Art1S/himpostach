<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_GIDR)->get();

name('poli_moch_haryacho');
?>

@extends('layouts.base')

@section('title', __(''))
@section('meta_description', __(''))
@section('meta_keywords', __(''))


@section('og_title', __(''))
@section('og_description', __(''))

@section('og_image', Vite::asset('resources/img/mat_4/01.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('Полимочевина гарячого нанесення') }}
        </x-slot>

        <x-slot:description>
            {{ __('Полімочевина гарячого нанесення – це високоміцна гідроізоляційна мембрана, яка застосовується для захисту
            різноманітних поверхонь від вологи, хімічних речовин та механічних пошкоджень. Цей продукт ідеально підходить
            для гідроізоляції плоских покрівель, терас, балконів, металевих покрівель, а також складних інженерних споруд,
            таких як мости, резервуари та очисні споруди. Полімочевина створює безшовне покриття, яке відрізняється високою
            еластичністю і здатністю витримувати значні температурні коливання та механічні навантаження.
            Крім того, ця гідроізоляція чудово взаємодіє з пінополіуретаном (ППУ) та пінополістиролом, утворюючи міцний бар`єр
            для захисту теплоізоляційних матеріалів. Вона також використовується для захисту резервуарів для зберігання
            нафтопродуктів, що потребують особливо стійкого покриття до хімічних впливів. Завдяки своїй стійкості до води
            і хімічних середовищ, полімочевина може використовуватися як захисне покриття для суден і плавальних басейнів,
            забезпечуючи довговічність і ефективність у різних умовах експлуатації.') }}

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

