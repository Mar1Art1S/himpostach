<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_pol');
?>

@extends('layouts.base')

@section('title', __('Вироби з ливарного поліуретану – міцність і довговічність для промислових рішень'))
@section('meta_description', __('Високоякісні вироби з ливарного поліуретану для промислового використання.
Забезпечте надійність та довговічність у виробництві зносостійких деталей, ущільнень, підкладок та інших елементів.
Ідеально підходять для машинобудування, гірничодобувної та будівельної галузей.'))
@section('meta_keywords', __('вироби з ливарного поліуретану, поліуретанові деталі, ливарний поліуретан промислові вироби,
зносостійкі поліуретанові вироби, поліуретанові ущільнення, промислові деталі з поліуретану, поліуретанові підкладки'))


@section('og_title', __('Вироби з ливарного поліуретану – міцність і довговічність для промислових рішень'))
@section('og_description', __('Високоякісні вироби з ливарного поліуретану для промислового використання.
Забезпечте надійність та довговічність у виробництві зносостійких деталей, ущільнень, підкладок та інших елементів.
Ідеально підходять для машинобудування, гірничодобувної та будівельної галузей.'))
@section('og_image', Vite::asset('resources/img/categories/012.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ВИРОБИ З ЛИВАРНОГО ПОЛІУРЕТАНУ') }}

        </x-slot>

        <x-slot:description>
            {{ __('Вироби з ливарного поліуретану широко застосовуються в різних галузях
					через їхню високу міцність, легкість та деталізацію. Цей матеріал
					використовується для виготовлення промислових компонентів, моделей,
					деталей для відливки та прототипів.У сфері меблевого виробництва
					ливарний поліуретан використовується для створення декоративних
					елементів, різноманітних орнаментів та обробки меблів. Він також
					дозволяє створювати складні форми та деталі, що складаються зі
					звичайно складних для виготовлення матеріалів.') }}

        </x-slot>

    </x-category-header>
    <livewire:search />

    <x-section>
{{--        <x-decor.card>--}}
{{--            @foreach ($products as $product)--}}
{{--                <x-product :product="$product" />--}}
{{--            @endforeach--}}

{{--        </x-decor.card>--}}
    </x-section>
@endsection
