@props(['caption'])

<section {{ $attributes->class('mb-12') }}>
    @isset($caption)
    <h2 {{ $caption->attributes->class(['flex items-center justify-center text-3xl font-semibold text-gray-800
        sf:text-2xl xs:text-base']) }}>
        {{ $caption }}
    </h2>
    @endisset

    <div class="container">
        {{ $slot }}
    </div>
</section>