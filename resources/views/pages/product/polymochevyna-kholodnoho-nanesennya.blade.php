<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KHOLODNO)->get();

name('poli_moch_kholodno');
?>

@extends('layouts.base')

@section('title', __('Поліуретанові клеї для гумової та EPDM крихти – надійне з`єднання для спортивних та ігрових покриттів'))
@section('meta_description', __('Поліуретанові клеї для гумової та EPDM крихти забезпечують міцне та довговічне з`єднання в спортивних
ігрових покриттях, бігових доріжках та дитячих майданчиках. Ці клеї відзначаються стійкістю до впливу погодних умов, зносу та
механічних навантажень, що робить їх ідеальним вибором для створення безпечних та довговічних покриттів.'))
@section('meta_keywords', __('поліуретанові клеї для гумової крихти, поліуретановий клей для EPDM крихти, клей для спортивних покриттів,
з`єднання гумової крихти, поліуретанові клеї для ігрових майданчиків, стійкий клей для гумових покриттів, монтаж EPDM крихти,
поліуретановий клей для бігових доріжок'))


@section('og_title', __('Поліуретанові клеї для гумової та EPDM крихти – надійне з`єднання для спортивних та ігрових покриттів'))
@section('og_description', __('Поліуретанові клеї для гумової та EPDM крихти забезпечують міцне та довговічне з`єднання в спортивних
ігрових покриттях, бігових доріжках та дитячих майданчиках. Ці клеї відзначаються стійкістю до впливу погодних умов, зносу та
механічних навантажень, що робить їх ідеальним вибором для створення безпечних та довговічних покриттів.'))

@section('og_image', Vite::asset('resources/img/mat_4/01.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_cold_applied') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_cold_applied') }}
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

