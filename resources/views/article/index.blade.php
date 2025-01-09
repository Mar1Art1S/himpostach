@extends('layouts.base')

@section('content')

<x-section class="container mx-auto">
    <div class="flex items-center justify-center mt-12">
        <x-slot:caption>
            {{ __('Блог') }}
            </x-slot>
    </div>

    <section class="bg-white w-full mt-[40px]">

        <x-decor.card>

            @foreach($articles as $article)
            <div class="flex flex-col items-start w-[400px] h-[440px]">
                <a href="{{ route('article.show', [$article->category->slug, $article->slug]) }}" class="block">
                    <img class="object-cover w-full justify-center mb-2 overflow-hidden shadow-sm h-[300px]"
                        src="{{ Storage::url($article->preview_image) }}" alt="">
                </a>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">
                    <a href="{{ route('article.show', [$article->category->slug, $article->slug]) }}">
                        {{ $article->title }}
                    </a>
                </h2>
                <p class="text-sm text-gray-500">{{ $article->preview_text }}</p>
                <p class="pt-2 text-xs font-medium">
                    <span class="mx-1">{{ $article->formatted_published_at }}</span> ·
                    <span class="mx-1 text-gray-600">{{ $article->category->title }}</span>
                </p>
            </div>
            @endforeach


        </x-decor.card>
        <div class="flex justify-center mt-8">
            <div class="mt-4 ">
                {{ $articles->links('vendor.pagination.custom') }}
            </div>

        </div>


        </div>
    </section>

</x-section>

@endsection