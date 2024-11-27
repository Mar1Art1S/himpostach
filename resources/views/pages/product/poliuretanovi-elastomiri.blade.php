<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PU_ELASTOMIRI)->get();

name('prod_pu_elastomiri');
?>

@extends('layouts.base')

@section('title', __('Поліуретанові еластоміри – надійні рішення для зносостійких і гнучких деталей'))
@section('meta_description', __('Поліуретанові еластоміри забезпечують високу міцність, гнучкість
і зносостійкість, що робить їх ідеальним матеріалом для виготовлення промислових деталей, ущільнень,
роликів та амортизаторів. Вони володіють відмінною стійкістю до хімічних впливів і зносу, що гарантує тривалий
термін служби навіть у найсуворіших умовах.'))
@section('meta_keywords', __('поліуретанові еластоміри, зносостійкі еластоміри, промислові деталі з поліуретану, гнучкі поліуретанові матеріали,
еластомери для ущільнень, довговічні поліуретанові еластоміри, поліуретанові ролики, амортизатори з поліуретану'))


@section('og_title', __('Поліуретанові еластоміри – надійні рішення для зносостійких і гнучких деталей'))
@section('og_description', __('Поліуретанові еластоміри забезпечують високу міцність, гнучкість
і зносостійкість, що робить їх ідеальним матеріалом для виготовлення промислових деталей, ущільнень,
роликів та амортизаторів. Вони володіють відмінною стійкістю до хімічних впливів і зносу, що гарантує тривалий
термін служби навіть у найсуворіших умовах.'))

@section('og_image', Vite::asset('resources/img/mat_2/03.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_elastomer') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_elastomer') }}

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

