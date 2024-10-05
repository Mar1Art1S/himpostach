<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


{{--    {!! seo() !!}--}}

    {!! seo($article ?? null) !!}
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

