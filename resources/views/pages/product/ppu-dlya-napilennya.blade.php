<?php
use App\Enums\CategoryEnum;
use App\Models\Product;
use function Laravel\Folio\name;


$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_NAPILENNYA)->get();

name('prod_ppu_napilennya');
?>

@extends('layouts.base')

@section('title', __('ППУ для напилення – ефективна тепло- та гідроізоляція для вашого будинку'))
@section('meta_description', __('Напилюваний пінополіуретан (ППУ) – сучасне рішення для якісної тепло- та гідроізоляції будівель.
Забезпечує енергозбереження, довговічність та швидкий монтаж. Ідеально підходить для утеплення дахів, стін, підлог та підвалів.'))
@section('meta_keywords', __('ППУ для напилення, напилюваний пінополіуретан, теплоізоляція ППУ, гідроізоляція пінополіуретаном,
енергозберігаюча ізоляція, утеплення будинку ППУ, напилювана ізоляція, сучасні ізоляційні матеріали, монтаж пінополіуретанової ізоляції,
ізоляція дахів та стін ППУ'))


@section('og_title', __('ППУ для напилення – ефективна тепло- та гідроізоляція для вашого будинку'))
@section('og_description', __('Напилюваний пінополіуретан (ППУ) – сучасне рішення для якісної тепло- та гідроізоляції будівель.
Забезпечує енергозбереження, довговічність та швидкий монтаж. Ідеально підходить для утеплення дахів, стін, підлог та підвалів.'))

@section('og_image', Vite::asset('resources/img/6_PPU_grup/001.jpeg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ППУ ДЛЯ НАПИЛЕННЯ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Пінополіуретан (ППУ) для напилення - це таплоізоляційний матеріал, який відзначається високою теплоізолюючою здатністю.
            В основному виробляємо три віди пін, густиною: 10, 30 та 50 кг/м куб., відповідно для внутришнього використання, для стін та для покрівель.
            Крім цього, важливо відзначити, що ППУ не є матеріалом, в якому можуть жити гризуни та комахи. Між тим, він є абсолютно нешкідливим для здоровья
            людини та тварин. Таким чином, використання ППУ для напилення є ефективним заходом як для збереження енергії в будівлях, так і для запобігання
            проникненню шкідників.') }}

        </x-slot>

    </x-category-header>
    <livewire:search/>
{{--@dump($products)--}}
    <x-section>
        <x-decor.card>
            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach

        </x-decor.card>
    </x-section>

@endsection
