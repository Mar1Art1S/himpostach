<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_MASIVU)->get();

name('prod_ppu_masivu');
?>

@extends('layouts.base')

@section('title', __('ППУ для зміцнення вугільного масиву та фундаментів'))
@section('meta_description', __('ППУ ефективно використовується для заповнення порожнин, підняття та підсилення фундаментів,
стабілізації шахт та тунелів.'))
@section('meta_keywords', __('ППУ для зміцнення вугільного масиву, зміцнення фундаментів пінополіуретаном, пінополіуретан для шахт, стабілізація підземних конструкцій ППУ,
зміцнення підземних стін ППУ, ППУ для будівельних фундаментів, підсилення старих фундаментів ППУ, заповнення порожнин пінополіуретаном'))


@section('og_title', __('ППУ для зміцнення вугільного масиву та фундаментів'))
@section('og_description', __('ППУ ефективно використовується для заповнення порожнин, підняття та підсилення фундаментів,
стабілізації шахт та тунелів.'))

@section('og_image', Vite::asset('resources/img/6_PPU_grup/006.jpeg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_coal') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_coal') }}

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

