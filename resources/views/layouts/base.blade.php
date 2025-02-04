<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="YI1qHQLqb3Zb5gUi9zIJLM3tP2jW81Vu7pd_0GzUbOs" />

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NW4654RH');</script>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NW4654RH"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


    {!! seo($article ?? null) !!}

    @vite(['resources/css/app.css', 'resources/js/calc.js', 'resources/js/app.js'])
    <link rel="canonical" href="{{ url()->current() }}">
</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7WSPMVQ2DB"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7WSPMVQ2DB');
</script>
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

