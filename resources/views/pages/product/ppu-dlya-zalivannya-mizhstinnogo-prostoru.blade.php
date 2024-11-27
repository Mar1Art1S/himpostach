<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\CategoryEnum;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_PROSTORU)->get();

name('prod_ppu_prostoru');
?>

@extends('layouts.base')

@section('title', __('ППУ для заливання міжстінного простору – ефективна ізоляція та зміцнення конструкцій'))
@section('meta_description', __('Пінополіуретан (ППУ) для заливання міжстінного простору забезпечує відмінну тепло- та
звукоізоляцію, а також зміцнення будівельних конструкцій. Ефективне рішення для утеплення стін, підвищення енергоефективності
та довговічності будівель. ППУ також заповнює порожнини, створюючи надійний захист від вологи та повітряних потоків.'))
@section('meta_keywords', __('ППУ для заливання міжстінного простору, ізоляція міжстінного простору пінополіуретаном, утеплення стін ППУ, теплоізоляція міжстінного простору,
заповнення порожнин ППУ, звукоізоляція стін пінополіуретаном, ППУ для будівельних конструкцій, захист від вологи ППУ'))


@section('og_title', __('ППУ для заливання міжстінного простору – ефективна ізоляція та зміцнення конструкцій'))
@section('og_description', __('Пінополіуретан (ППУ) для заливання міжстінного простору забезпечує відмінну тепло- та
звукоізоляцію, а також зміцнення будівельних конструкцій. Ефективне рішення для утеплення стін, підвищення енергоефективності
та довговічності будівель. ППУ також заповнює порожнини, створюючи надійний захист від вологи та повітряних потоків.'))

@section('og_image', Vite::asset('resources/img/6_PPU_grup/007.jpeg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_interior') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_interior') }}

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

