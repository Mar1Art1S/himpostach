<?php
use App\Enums\CategoryEnum;
use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_FILTRIV)->get();

name('prod_ppu_filtriv');
?>

@extends('layouts.base')

@section('title', __('ППУ для повітряних фільтрів – ефективне очищення та надійний захист від забруднень'))
@section('meta_description', __('Пінополіуретан (ППУ) для виготовлення повітряних фільтрів забезпечує високу ефективність очищення
повітря від твердих часток, пилу, бактерій та інших забруднень. Завдяки своїй пористості, міцності та хімічній стійкості, ППУ
фільтри використовуються в промисловості, медицині, автомобільній галузі та інших сферах, де потрібна висока якість повітря.'))
@section('meta_keywords', __('ППУ для повітряних фільтрів, повітряні фільтри з пінополіуретану, фільтри для очищення повітря ППУ,
високоефективні ППУ фільтри, промислові фільтри з пінополіуретану, очищення повітря пінополіуретановими фільтрами,
хімічно стійкі повітряні фільтри, довговічні повітряні фільтри ППУ'))


@section('og_title', __('ППУ для повітряних фільтрів – ефективне очищення та надійний захист від забруднень'))
@section('og_description', __('Пінополіуретан (ППУ) для виготовлення повітряних фільтрів забезпечує високу ефективність очищення
повітря від твердих часток, пилу, бактерій та інших забруднень. Завдяки своїй пористості, міцності та хімічній стійкості, ППУ
фільтри використовуються в промисловості, медицині, автомобільній галузі та інших сферах, де потрібна висока якість повітря.'))

@section('og_image', Vite::asset('resources/img/6_PPU_grup/008.jpeg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_filters') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_filters') }}

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

