<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_LAK_SMOLI)->get();

name('prod_lak_smoli');
?>

@extends('layouts.base')

@section('title', __('Алкідно-модифіковані та бутоксильовані смоли – оптимальні рішення для лакофарбових матеріалів'))
@section('meta_description', __('Високоефективні алкідно-модифіковані та бутоксильовані смоли для виробництва лакофарбових матеріалів.
Покращені властивості для міцності, стійкості до зносу та чудового зовнішнього вигляду покриттів.
Ідеальні для різних промислових застосувань.'))
@section('meta_keywords', __('алкідно-модифіковані смоли, бутоксильовані смоли, смоли для лакофарбових матеріалів,
алкідні смоли для фарб, смоли для покриттів, високоякісні смоли для промисловості, модифіковані смоли для лаків і фарб'))


@section('og_title', __('Алкідно-модифіковані та бутоксильовані смоли – оптимальні рішення для лакофарбових матеріалів'))
@section('og_description', __('Високоефективні алкідно-модифіковані та бутоксильовані смоли для виробництва лакофарбових матеріалів.
Покращені властивості для міцності, стійкості до зносу та чудового зовнішнього вигляду покриттів.
Ідеальні для різних промислових застосувань.'))

@section('og_image', Vite::asset('resources/img/mat_5/04.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('СМОЛИ АЛКІДНО-МОДИФІКОВАНІ ТА БУТОКСИЛЬОВАНІ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Смоли алкідно-модифіковані та бутоксильовані знаходять широке використання у різних галузях промисловості, включаючи
            виробництво фарб, лаків, покриттів, клеїв та інших матеріалів. Вони є важливими компонентами для створення покриттів, що мають
            високу міцність, стійкість до зношування, водостійкість та стійкість до ультрафіолетового випромінювання. Ці смоли можуть бути
            використані як покриття для металевих, дерев`яних або скляних поверхонь, а також як матеріал для виготовлення різноманітних
            виробів, від меблів до пластикових виробів. Вони також можуть бути модифіковані для виробництва спеціалізованих матеріалів,
            таких як композити, фільтри та інші продукти, що вимагають високих технічних характеристик.') }}

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
