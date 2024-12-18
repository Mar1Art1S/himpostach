<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PU_LIVARNIJ)->get();

name('prod_pu_livarnij');
?>

@extends('layouts.base')

@section('title', __('Поліуретан ливарний компактний – ідеальний матеріал для декору та меблевого виробництва'))
@section('meta_description', __('Поліуретан ливарний компактний використовується для виготовлення сувенірів, елементів декору,
фасадів, меблів та фурнітури. Завдяки своїй міцності, стійкості до пошкоджень і корозії, а також легкості в обробці, поліуретан
дозволяє створювати якісні імітації деревини та інші деталі з високою точністю. Ідеальний для дизайнерських проектів та
виробництва інтер’єрних виробів.'))
@section('meta_keywords', __('поліуретан ливарний компактний, поліуретан для декору, ливарний поліуретан для меблів,
імітація деревини з поліуретану, поліуретанова фурнітура, елементи декору з поліуретану, поліуретан для інтер’єрних виробів,
стійкий поліуретан для меблів, ливарний поліуретан для сувенірів'))


@section('og_title', __('Поліуретан ливарний компактний – ідеальний матеріал для декору та меблевого виробництва'))
@section('og_description', __('Поліуретан ливарний компактний використовується для виготовлення сувенірів, елементів декору,
фасадів, меблів та фурнітури. Завдяки своїй міцності, стійкості до пошкоджень і корозії, а також легкості в обробці, поліуретан
дозволяє створювати якісні імітації деревини та інші деталі з високою точністю. Ідеальний для дизайнерських проектів та
виробництва інтер’єрних виробів.'))

@section('og_image', Vite::asset('resources/img/mat_2/01.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_livarni') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_livarni') }}
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

