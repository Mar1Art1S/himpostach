<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_KARTONU)->get();

name('prod_klej_kartonu');
?>

@extends('layouts.base')

@section('title', __('Водорозчинні клеї для паперу та картону – екологічне та надійне склеювання'))
@section('meta_description', __('Водорозчинні клеї для паперу та картону забезпечують надійне та швидке склеювання, зберігаючи
екологічність та безпеку. Ідеально підходять для виробництва упаковки, етикеток, книг та інших паперових виробів. Відзначаються
швидким висиханням, відсутністю запаху та зручністю у використанні.'))
@section('meta_keywords', __('водорозчинні клеї для паперу, клей для картону, екологічний клей для паперу, клей для виробництва упаковки,
склеювання паперу водорозчинним клеєм, безпечний клей для картону, клей для етикеток і книг, швидковисихаючий клей для паперу'))


@section('og_title', __('Водорозчинні клеї для паперу та картону – екологічне та надійне склеювання'))
@section('og_description', __('Водорозчинні клеї для паперу та картону забезпечують надійне та швидке склеювання, зберігаючи
екологічність та безпеку. Ідеально підходять для виробництва упаковки, етикеток, книг та інших паперових виробів. Відзначаються
швидким висиханням, відсутністю запаху та зручністю у використанні.'))

@section('og_image', Vite::asset('resources/img/mat_4/08.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_paper') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_paper') }}

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
