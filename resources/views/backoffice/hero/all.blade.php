@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section Hero-->
    <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 text-4xl font-light rounded-lg shadow-lg apparition1">Héros</h2>
        {{-- <div class="max-w-6xl mx-auto  flex justify-center my-10">
            <a class="backoffice_btn text-white font-semibold py-2 px-4 rounded shadow" href="/hero/create">Nouveau héro</a>
        </div> --}}
        <div class="grid grid-cols-1 gap-5 max-w-6xl mx-auto py-20">

            <!--Card-->
            @foreach ($heros as $hero)
                <div class="rounded overflow-hidden shadow-lg apparition">
                    <div class="px-6 py-4">
                        <p class="text-gray-700 text-base text-center">
                            {{ $hero->h1 }}
                        </p>
                        <p class="text-gray-700 text-base text-center">
                            {{ $hero->h2 }}
                        </p>
                        <div class="admin_btns">
                            <a href="{{route('hero.edit',$hero->id) }}" class="backoffice_btn bg-white text-center mb-2 mx-4 hover:border-blue-500 hover:text-blue-500" style="color: #6741EF">Éditer</a>
                 
                        </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection