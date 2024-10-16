<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_klei');
?>

@extends('layouts.base')

@section('title', __('Поліуретанові клеї – надійне рішення для міцного з`єднання матеріалів'))
@section('meta_description', __('Високоякісні поліуретанові клеї для міцного та довговічного з`єднання різних матеріалів.
Ідеально підходять для будівництва, меблів, автоіндустрії та інших сфер. Стійкість до вологи, температури та механічних навантажень.'))
@section('meta_keywords', __('поліуретановий клей, клей для міцного з`єднання, поліуретановий клей для будівництва,
поліуретановий клей для меблів, стійкі поліуретанові клеї, клей для з`єднання матеріалів, водостійкі поліуретанові клеї'))


@section('og_title', __('Поліуретанові клеї – надійне рішення для міцного з`єднання матеріалів'))
@section('og_description', __('Високоякісні поліуретанові клеї для міцного та довговічного з`єднання різних матеріалів.
Ідеально підходять для будівництва, меблів, автоіндустрії та інших сфер. Стійкість до вологи, температури та механічних навантажень.'))
@section('og_image', Vite::asset('resources/img/categories/004.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПОЛІУРЕТАНОВІ КЛЕЇ') }}

        </x-slot>

        <x-slot:description>
            {{ __('Поліуретанові клеї широко використовуються в різних галузях промисловості та ремонту. Вони є дуже міцними
        та мають широкий спектр застосувань завдяки своїм властивостям. Ці клеї чудово підходять для склеювання дерев`яних
        елементів, таких як меблі, підлоги, двері тощо, завдяки високій міцності зчеплення з деревиною та вологостійкості.
        Вони також широко використовуються в автомобільній промисловості для склеювання внутрішніх деталей автомобілів,
        наприклад, панелей приладів чи оббивки сидінь. Крім того, поліуретанові клеї дуже популярні в ремонті та будівництві,
        де вони можуть бути використані для різноманітних конструкційних робіт та ремонтних заходів.') }}
        </x-slot>

    </x-category-header>
    <livewire:search />

    <x-section>
        <x-decor.card>
            <x-category-v
                title=" {{ __('Поліуретанові клеї для гумової та EPDM крихти') }}"
                description="{{ __('Поліуретанові клеї для гумової та EPDM (етиленпропілендієновий каучук) крихти широко використовуються для') }}"
                image="{{ Vite::asset('resources/img/mat_4/01.jpg') }}"
                link="{{ route('prod_klej_krihti') }}"
                video="{{ 'VHqhn12bUc0?si=qR2n3kgnZgEc_A_b' }}"
            />
            <x-category-v
                title=" {{ __('Поліуретанові клеї однокомпонентні для дерева Д4') }}"
                description="{{ __('Поліуретановий клей однокомпонентний для дерева є відмінним вибором для склеювання дерев`яних деталей в різних') }}"
                image="{{ Vite::asset('resources/img/mat_4/02.jpg') }}"
                link="{{ route('prod_klej_dereva_d4') }}"
                video="{{ 'VHqhn12bUc0?si=qR2n3kgnZgEc_A_b' }}"
            />
            <x-category-v
                title=" {{ __('Поліуретанові клеї однокомпонентні для сендвіч-панелей та клінкерних термопанелей') }}"
                description="{{ __('Поліуретанові клеї для сендвіч-панелей та клінкерних термопанелей знаходять широке') }}"
                image="{{ Vite::asset('resources/img/mat_4/03.jpg') }}"
                link="{{ route('prod_klej_sendvich') }}"
                video="{{ 'mgQP2OUBN7U?si=KR6H0Is7s1OHX-lr' }}"
            />
            <x-category-v
                title=" {{ __('Поліуретанові клеї однокомпонентні для поролону, мікрофібри, текстилю') }}"
                description="{{ __('Поліуретановий клей однокомпонентний призначений для склеювання поролону, мікрофібри та') }}"
                image="{{ Vite::asset('resources/img/mat_4/04.jpg') }}"
                link="{{ route('prod_klej_tekstilyu') }}"
                video="{{ 'VHqhn12bUc0?si=qR2n3kgnZgEc_A_b' }}"
            />
            <x-category-v
                title=" {{ __('Поліуретановий клей двокомпонентний для будівельних матеріалів') }}"
                description="{{ __('Поліуретановий клей двокомпонентний для будівельних матеріалів використовується для склеювання різних поверхонь') }}"
                image="{{ Vite::asset('resources/img/mat_4/05.jpg') }}"
                link="{{ route('prod_klej_budivelnih') }}"
                video="{{ 'VHqhn12bUc0?si=qR2n3kgnZgEc_A_b' }}"
            />
            <x-category-v
                title=" {{ __('Поліуретановий клей двокомпонентний для паркету та загально-будівельного призначення') }}"
                description="{{ __('Поліуретановий клей двокомпонентний для паркету та загальнобудівельного призначення ') }}"
                image="{{ Vite::asset('resources/img/mat_4/06.jpg') }}"
                link="{{ route('prod_klej_parketu') }}"
                video="{{ 'oFXAYIwb2lw?si=o4fNi96jVLNELfkt' }}"
            />
            <x-category-v
                title=" {{ __('Поліуретановий клей двокомпонентний для штучної трави') }}"
                description="{{ __('Поліуретановий клей двокомпонентний для штучної трави використовується для монтажу та кріплення штучного газону') }}"
                image="{{ Vite::asset('resources/img/mat_4/07.jpg') }}"
                link="{{ route('prod_klej_travi') }}"
                video="{{ 'VHqhn12bUc0?si=qR2n3kgnZgEc_A_b' }}"
            />
            <x-category-v
                title=" {{ __('Водорозчинні клеї для паперу та картону') }}"
                description="{{ __('Водорозчинні клеї для паперу та картону використовуються в різних галузях, таких як друкарство, упаковка, реклама') }}"
                image="{{ Vite::asset('resources/img/mat_4/08.jpg') }}"
                link="{{ route('prod_klej_kartonu') }}"
                video="{{ 'VHqhn12bUc0?si=qR2n3kgnZgEc_A_b' }}"
            />
        </x-decor.card>
    </x-section>
@endsection
