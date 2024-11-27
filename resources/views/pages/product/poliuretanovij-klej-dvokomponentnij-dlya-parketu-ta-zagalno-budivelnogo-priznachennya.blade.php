<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_PARKETU)->get();

name('prod_klej_parketu');
?>

@extends('layouts.base')

@section('title', __('Двокомпонентний поліуретановий клей для паркету та загальнобудівельних робіт – надійне склеювання та довговічність'))
@section('meta_description', __('Двокомпонентний поліуретановий клей ідеально підходить для укладання паркету та використання у
загальнобудівельних роботах. Відзначається високою адгезією, міцністю та стійкістю до вологи, що гарантує тривалий термін служби
та надійність склеювання навіть у складних умовах. Ідеальний вибір для професійного укладання підлогових покриттів та будівельних конструкцій.'))
@section('meta_keywords', __('двокомпонентний поліуретановий клей для паркету, клей для укладання паркету, поліуретановий клей для будівельних робіт,
клей для паркету та загальнобудівельних робіт, міцний поліуретановий клей, клей для підлогових покриттів, вологостійкий клей для паркету,
професійний клей для будівництва'))


@section('og_title', __('Двокомпонентний поліуретановий клей для паркету та загальнобудівельних робіт – надійне склеювання та довговічність'))
@section('og_description', __('Двокомпонентний поліуретановий клей ідеально підходить для укладання паркету та використання у
загальнобудівельних роботах. Відзначається високою адгезією, міцністю та стійкістю до вологи, що гарантує тривалий термін служби
та надійність склеювання навіть у складних умовах. Ідеальний вибір для професійного укладання підлогових покриттів та будівельних конструкцій.'))

@section('og_image', Vite::asset('resources/img/mat_4/06.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_parquet') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_parquet') }}

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
