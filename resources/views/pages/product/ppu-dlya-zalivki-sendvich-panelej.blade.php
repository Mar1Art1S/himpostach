<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_SENDVICH)->get();

name('prod_ppu_sendvich');
?>

@extends('layouts.base')

@section('title', __('ППУ для сендвіч панелей та холодильного обладнання – ефективна ізоляція та енергоефективність'))
@section('meta_description', __('Пінополіуретан (ППУ) для виробництва сендвіч панелей і торговельного холодильного обладнання
забезпечує чудові теплоізоляційні властивості та високу енергоефективність. Надійне рішення для будівництва, зберігання
та транспортування охолоджених продуктів.'))
@section('meta_keywords', __('ППУ для сендвіч панелей, пінополіуретан для холодильного обладнання, ізоляція сендвіч панелей ППУ, енергоефективні сендвіч панелі,
теплоізоляція холодильного обладнання, матеріали для сендвіч панелей, ППУ для торговельних холодильників, ізоляційні матеріали для холодильного обладнання,
 утеплення сендвіч панелей ППУ'))


@section('og_title', __('ППУ для сендвіч панелей та холодильного обладнання – ефективна ізоляція та енергоефективність'))
@section('og_description', __('Пінополіуретан (ППУ) для виробництва сендвіч панелей і торговельного холодильного обладнання
забезпечує чудові теплоізоляційні властивості та високу енергоефективність. Надійне рішення для будівництва, зберігання
та транспортування охолоджених продуктів.'))

@section('og_image', Vite::asset('resources/img/6_PPU_grup/004.jpeg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_refrigeration') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_refrigeration') }}
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

