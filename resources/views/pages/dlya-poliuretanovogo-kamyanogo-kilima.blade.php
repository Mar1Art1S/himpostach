<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KILIMA)->get();

name('py_kilima');
?>

@extends('layouts.base')

@section('title', __('Сировина для поліуретанового кам`яного килима – основа міцності та довговічності покриття'))
@section('meta_description', __('Надійна сировина для створення поліуретанового кам`яного килима. Високоякісні полімери та
наповнювачі для довговічних і стійких покриттів. Ідеальне рішення для внутрішніх і зовнішніх робіт.'))
@section('meta_keywords', __('сировина для поліуретанового кам`яного килима, полімери для кам`яного килима, поліуретановий кам`яний килим,
наповнювачі для кам`яного покриття, компоненти для поліуретанового килима, довговічні полімери для покриттів, поліуретанове покриття для підлоги'))


@section('og_title', __('Сировина для поліуретанового кам`яного килима – основа міцності та довговічності покриття'))
@section('og_description', __('Надійна сировина для створення поліуретанового кам`яного килима. Високоякісні полімери та
наповнювачі для довговічних і стійких покриттів. Ідеальне рішення для внутрішніх і зовнішніх робіт.'))
@section('og_image', Vite::asset('resources/img/categories/003.jpg'))
@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('mes.subproduct_top_title_py_stone_carpet') }}

        </x-slot>

        <x-slot:description>
            {{ __('mes.subproduct_top_description_py_stone_carpet') }}
        </x-slot>

    </x-category-header>


    <x-section>
        <x-decor.card>
            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach

        </x-decor.card>
    </x-section>
@endsection
