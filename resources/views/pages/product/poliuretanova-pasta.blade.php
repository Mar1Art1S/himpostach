<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PU_PASTA)->get();

name('prod_pu_pasta');
?>

@extends('layouts.base')

@section('title', __('Поліуретанова паста – універсальний матеріал для ремонтів і герметизації'))
@section('meta_description', __('Поліуретанова паста ідеально підходить для герметизації, ремонту та відновлення різних поверхонь.
Завдяки своїй високій еластичності, міцності та стійкості до впливу вологи, поліуретанова паста використовується в будівництві,
автомобільній промисловості та для ремонту промислового обладнання.'))
@section('meta_keywords', __('поліуретанова паста, герметизація поліуретановою пастою, ремонт поверхонь поліуретаном, поліуретанова паста для будівництва,
еластична поліуретанова паста, герметик на основі поліуретану, ремонтний матеріал з поліуретану, відновлення поверхонь поліуретановою пастою'))


@section('og_title', __('Поліуретанова паста – універсальний матеріал для ремонтів і герметизації'))
@section('og_description', __('Поліуретанова паста ідеально підходить для герметизації, ремонту та відновлення різних поверхонь.
Завдяки своїй високій еластичності, міцності та стійкості до впливу вологи, поліуретанова паста використовується в будівництві,
автомобільній промисловості та для ремонту промислового обладнання.'))

@section('og_image', Vite::asset('resources/img/mat_2/04.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_paste') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_paste') }}
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


