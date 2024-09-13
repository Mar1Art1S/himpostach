@extends('layouts.base')

@section('content')
    <section>
        <x-container>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full md:w-1/2 md:ml-auto md:mr-auto">
                    @yield('auth.content')
                </div>
            </div>
        </x-container>
    </section>
@endsection

