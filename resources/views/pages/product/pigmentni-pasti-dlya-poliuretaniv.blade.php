<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PU_PIGMENT)->get();

name('prod_pu_pigment');
?>

@extends('layouts.base')


@section('title', __('Пігментні пасти для поліуретанів – яскраві кольори та стабільність забарвлення'))
@section('meta_description', __('Пігментні пасти для поліуретанів забезпечують насичені кольори та високу стабільність
забарвлення у виробах
з поліуретану. Ідеальні для застосування в будівництві, автомобільній промисловості та виробництві меблів. Пасти легко
змішуються
з поліуретановими системами, гарантують рівномірний розподіл кольору та зберігають свої властивості в умовах
експлуатації.'))
@section('meta_keywords', __('пігментні пасти для поліуретанів, забарвлення поліуретанових виробів, кольорові пасти для
поліуретану,
пігментація поліуретанів, поліуретанові пігментні добавки, насичені кольори для поліуретанів, пігментні пасти для
промислових полімерів,
фарбування поліуретанових систем'))


@section('og_title', __('Поліуретанова паста – універсальний матеріал для ремонтів і герметизації'))
@section('og_description', __('Пігментні пасти для поліуретанів забезпечують насичені кольори та високу стабільність
забарвлення у виробах
з поліуретану. Ідеальні для застосування в будівництві, автомобільній промисловості та виробництві меблів. Пасти легко
змішуються
з поліуретановими системами, гарантують рівномірний розподіл кольору та зберігають свої властивості в умовах
експлуатації.'))

@section('og_image', Vite::asset('resources/img/mat_2/05.jpg'))

@section('content')
<x-category-header>
    <x-slot:title>
        {{ __('mes.product_top_title_py_pigmented') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_pigmented') }}

            </x-slot>

</x-category-header>
<livewire:search />



 <x-section>
    <x-decor.card>
        @foreach ($products as $product)
        <x-product :product="$product" />
        @endforeach

    </x-decor.card>
</x-section>
@endsection