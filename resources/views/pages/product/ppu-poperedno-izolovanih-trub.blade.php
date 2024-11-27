<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_TRUB)->get();

name('prod_ppu_trub');
?>

@extends('layouts.base')

@section('title', __('ППУ для попередньо ізольованих труб – надійна теплоізоляція для трубопроводів'))
@section('meta_description', __('Пінополіуретан (ППУ) для попередньо ізольованих труб забезпечує ефективну теплоізоляцію та захист
від корозії. Ідеальне рішення для трубопроводів теплопостачання, що знижує тепловтрати та підвищує енергоефективність системи.
Висока якість та довговічність для промислових і комунальних мереж.'))
@section('meta_keywords', __('ППУ для попередньо ізольованих труб, теплоізоляція для трубопроводів, попередньо ізольовані труби, пінополіуретан для труб,
ізоляція труб теплопостачання, енергоефективні ізольовані труби, теплоізоляція труб ППУ, захист труб від корозії,
 ізоляція для теплових мереж'))


@section('og_title', __('ППУ для попередньо ізольованих труб – надійна теплоізоляція для трубопроводів'))
@section('og_description', __('Пінополіуретан (ППУ) для попередньо ізольованих труб забезпечує ефективну теплоізоляцію та захист
від корозії. Ідеальне рішення для трубопроводів теплопостачання, що знижує тепловтрати та підвищує енергоефективність системи.
Висока якість та довговічність для промислових і комунальних мереж.'))

@section('og_image', Vite::asset('resources/img/6_PPU_grup/003.jpeg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_insulated_pipes') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_insulated_pipes') }}

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

