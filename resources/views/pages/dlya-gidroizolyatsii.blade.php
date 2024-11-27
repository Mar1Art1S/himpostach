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
            {{ __('mes.subproduct_top_title_py_waterproofing') }}

        </x-slot>

        <x-slot:description>
            {{ __('mes.subproduct_top_description_py_waterproofing') }}
        </x-slot>

    </x-category-header>

    <x-section>
        <x-decor.card>
            <x-category-v
                    title=" {{ __('mes.category_v_title_py_hot_applied_polyurea') }}"
                    description="{{ __('mes.category_v_description_py_hot_applied_polyurea') }}"
                    image="{{ Vite::asset('resources/img/mat_7/Полимочевина_гарячого_нанесення.jpeg') }}"
                    link="{{ route('poli_moch_haryacho')}}"
            />
            <x-category-v
                    title="{{ __('mes.category_v_title_py_cold_applied_polyurea') }}"
                    description="{{ __('mes.category_v_description_py_cold_applied_polyurea') }}"
                    image="{{ Vite::asset('resources/img/mat_7/Полімочивина_холодного_нанесення.jpeg') }}"
                    link="{{ route('poli_moch_kholodno')}}"
            />
        </x-decor.card>
    </x-section>
@endsection

