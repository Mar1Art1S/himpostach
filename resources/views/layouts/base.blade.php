<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>

    <meta name="description" content="@yield('meta_description', 'Default description')">
    <meta name="keywords" content="@yield('meta_keywords', 'Default keywords')">

    <meta property="og:title" content="@yield('og_title', 'Default OG Title')">
    <meta property="og:description" content="@yield('og_description', 'Default OG Description')">
    <meta property="og:image" content="@yield('og_image', asset('default-image.jpg'))">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
@include('partials.header')

<main>
    @yield('content')

    <x-section class="mb-0 bg-gray-200">
        <livewire:subscribe />
    </x-section>
</main>

@include('partials.footer')
</body>

</html>

