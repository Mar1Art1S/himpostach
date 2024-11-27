<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_HARYACHO)->get();

name('poli_moch_haryacho');
?>

@extends('layouts.base')

@section('title', __(''))
@section('meta_description', __(''))
@section('meta_keywords', __(''))


@section('og_title', __(''))
@section('og_description', __(''))

@section('og_image', Vite::asset('resources/img/mat_4/01.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_py_hot_application') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_py_hot_application') }}

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

