<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_gidro');
?>

@extends('layouts.base')
@section('title', __('Сировина для гідроізоляції'))
@section('meta_description', __('Гідроізоляційна мембрана для плоских покрівель, терас, балконів, металевих покрівель і споруд, мостів, резервуарів, очисних споруд, плавальних басейнів'))
@section('meta_keywords', __('сировина для гідроізоляції, хімічні компоненти, компоненти для гідроізоляції, сировина для виробництва гідроізоляції'))


@section('og_title', __('Сировина для гідроізоляції'))
@section('og_description', __('Гідроізоляційна мембрана для плоских покрівель, терас, балконів, металевих покрівель і споруд, мостів, резервуарів, очисних споруд, плавальних басейнів'))
@section('og_image', Vite::asset('resources/img/mat_7/Гідроізоляція.jpeg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('Сировина для гідроізоляції') }}

        </x-slot>

        <x-slot:description>
            {{ __('Сировина для гідроізоляції – це матеріали, які створюють захисний бар`єр від проникнення води та вологи в
            конструкції будівель. До основних видів належать полімерні речовини, такі як поліуретани, бітумні суміші на
            основі нафти, цементні суміші з добавками, а також різні мембрани і плівки з ПВХ або поліетилену. Ці
            матеріали використовуються для захисту фундаментів, дахів, трубопроводів, підлог та інших елементів
            будівель, забезпечуючи довговічність і стійкість до вологи.') }}
        </x-slot>

    </x-category-header>
    <livewire:search/>

    <x-section>

        <x-decor.card>
            <x-category-v
                    title=" {{ __('Полимочевина гарячого нанесення') }}"
                    description="{{ __('Гідроізоляційна мембрана для плоских покрівель, терас, балконів, металевих покрівель і споруд, мостів, резервуарів') }}"
                    image="{{ Vite::asset('resources/img/mat_7/Полимочевина_гарячого_нанесення.jpeg') }}"
                    link="{{ route('poli_moch_haryacho')}}"
                    video="{{ '22eQEvQuodk?si=NlPmeucuI7hUylCY' }}"
            />
            <x-category-v
                    title="{{ __('Полимочевина холодного нанесення') }}"
                    description="{{ __('Застосовується для терас, балконів, мостів, тунелів, підлог, паркінгів ') }}"
                    image="{{ Vite::asset('resources/img/mat_7/Полімочивина_холодного_нанесення.jpeg') }}"
                    link="{{ route('poli_moch_kholodno')}}"
                    video="{{ 'TwJNP9auUjA?si=BGjTF5bDB9mZpjcv' }}"
            />

        </x-decor.card>
    </x-section>
@endsection

