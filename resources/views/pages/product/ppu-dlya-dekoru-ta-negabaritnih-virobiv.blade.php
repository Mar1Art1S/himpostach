<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_VIROBIV)->get();

name('prod_ppu_virobiv');
?>

@extends('layouts.base')

@section('title', __('ППУ для декору та негабаритних виробів – легкість та міцність для творчих рішень'))
@section('meta_description', __('Пінополіуретан (ППУ) для декору та негабаритних виробів ідеально підходить для створення легких,
міцних та довговічних елементів. Використовуйте ППУ для виготовлення архітектурних деталей, рекламних конструкцій, сценічних
декорацій та інших негабаритних виробів.'))
@section('meta_keywords', __('ППУ для декору, пінополіуретан для негабаритних виробів, матеріали для архітектурного декору, ППУ для рекламних конструкцій,
пінополіуретан для сценічних декорацій, легкі та міцні вироби з ППУ, декоративні елементи з пінополіуретану, ППУ для творчих рішень,
 негабаритні вироби з пінополіуретану'))


@section('og_title', __('ППУ для декору та негабаритних виробів – легкість та міцність для творчих рішень'))
@section('og_description', __('Пінополіуретан (ППУ) для декору та негабаритних виробів ідеально підходить для створення легких,
міцних та довговічних елементів. Використовуйте ППУ для виготовлення архітектурних деталей, рекламних конструкцій, сценічних
декорацій та інших негабаритних виробів.'))

@section('og_image', Vite::asset('resources/img/6_PPU_grup/005.jpeg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_decor') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_decor') }}
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

