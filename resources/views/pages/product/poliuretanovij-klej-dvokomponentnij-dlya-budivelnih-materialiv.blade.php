<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_BUDIVELNIH)->get();

name('prod_klej_budivelnih');
?>

@extends('layouts.base')

@section('title', __('Двокомпонентний поліуретановий клей для будівельних матеріалів – міцне та довговічне з`єднання'))
@section('meta_description', __('Двокомпонентний поліуретановий клей забезпечує надійне склеювання будівельних матеріалів,
включаючи бетон, метал, дерево та пластик. Відзначається високою адгезією, стійкістю до механічних навантажень та
екстремальних умов, що робить його ідеальним для використання в будівництві, ремонті та інших складних проектах.'))
@section('meta_keywords', __('двокомпонентний поліуретановий клей, клей для будівельних матеріалів, поліуретановий клей для бетону,
клей для склеювання металу і дерева, міцний будівельний клей, поліуретановий клей для пластику, клей для екстремальних умов,
будівельний клей з високою адгезією'))


@section('og_title', __('Двокомпонентний поліуретановий клей для будівельних матеріалів – міцне та довговічне з`єднання'))
@section('og_description', __('Двокомпонентний поліуретановий клей забезпечує надійне склеювання будівельних матеріалів,
включаючи бетон, метал, дерево та пластик. Відзначається високою адгезією, стійкістю до механічних навантажень та
екстремальних умов, що робить його ідеальним для використання в будівництві, ремонті та інших складних проектах.'))

@section('og_image', Vite::asset('resources/img/mat_4/05.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_construction') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_construction') }}

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
