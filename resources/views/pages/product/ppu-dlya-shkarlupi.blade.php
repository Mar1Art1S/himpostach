<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\CategoryEnum;
$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_SHKARLUPI)->get();

name('prod_ppu_shkarlupi');
?>

@extends('layouts.base')

@section('title', __('ППУ для шкарлупи – ефективна теплоізоляція трубопроводів теплопостачання'))
@section('meta_description', __('Пінополіуретан (ППУ) для виробництва теплоізоляційних напівциліндрів (шкарлуп) для трубопроводів
теплопостачання. Забезпечує надійний захист від тепловтрат, знижує витрати на енергозбереження та продовжує термін служби трубопроводів.
Ідеально підходить для промислових і комунальних мереж.'))
@section('meta_keywords', __('ППУ для шкарлупи, теплоізоляційні напівциліндри, теплоізоляція трубопроводів, шкарлупи для теплопостачання,
ізоляція для трубопроводів ППУ, пінополіуретан для ізоляції труб, енергозберігаюча ізоляція труб, промислові ізоляційні матеріали,
 ізоляція для теплових мереж'))


@section('og_title', __('ППУ для шкарлупи – ефективна теплоізоляція трубопроводів теплопостачання'))
@section('og_description', __('Пінополіуретан (ППУ) для виробництва теплоізоляційних напівциліндрів (шкарлуп) для трубопроводів
теплопостачання. Забезпечує надійний захист від тепловтрат, знижує витрати на енергозбереження та продовжує термін служби трубопроводів.
Ідеально підходить для промислових і комунальних мереж.'))

@section('og_image', Vite::asset('resources/img/6_PPU_grup/002.jpeg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.product_top_title_ppy_scalp') }}
        </x-slot>

        <x-slot:description>
            {{ __('mes.product_top_description_ppy_scalp') }}

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

