<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_EMK)->get();

name('py_emk');
?>

@extends('layouts.base')

@section('title', __('Ефект мокрого каменю – стильні рішення для декоративного покриття'))
@section('meta_description', __('Створіть привабливий ефект мокрого каменю для інтер’єрів та екстер’єрів. Використовуйте високоякісні
матеріали для довговічного та естетично привабливого покриття. Ідеально підходить для кам`яних поверхонь, фасадів, та декоративних елементів.'))
@section('meta_keywords', __('ефект мокрого каменю, декоративне покриття мокрий камінь, матеріали для ефекту мокрого каменю,
поліуретанові наповнювачі, мокрий камінь оздоблення, кам`яні поверхні з ефектом мокрого каменю, створення ефекту мокрого каменю'))


@section('og_title', __('Ефект мокрого каменю – стильні рішення для декоративного покриття'))
@section('og_description', __('Створіть привабливий ефект мокрого каменю для інтер’єрів та екстер’єрів. Використовуйте високоякісні
матеріали для довговічного та естетично привабливого покриття. Ідеально підходить для кам`яних поверхонь, фасадів, та декоративних елементів.'))
@section('og_image', Vite::asset('resources/img/mat_3/2.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.subproduct_top_title_py_wet_stone_effect') }}

        </x-slot>

        <x-slot:description>
            {{ __('mes.subproduct_top_description_py_wet_stone_effect') }}
        </x-slot>

    </x-category-header>


    <x-section>
        <x-decor.card>

            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach
        </x-decor.card>
    </x-section>
@endsection
