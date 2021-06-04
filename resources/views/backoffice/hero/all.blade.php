@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section Hero-->
    <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 text-4xl font-light rounded-lg shadow-lg">Héros</h2>
        <div class="max-w-6xl mx-auto  flex justify-center my-10">
            <a class="backoffice_btn text-white font-semibold py-2 px-4 rounded shadow" href="/hero/create">Nouveau héro</a>
        </div>
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

            <!--Card-->
            @foreach ($heros as $hero)
                <div class="rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <p class="text-gray-700 text-base">
                            {{ $hero->h1 }}
                        </p>
                        <p class="text-gray-700 text-base">
                            {{ $hero->h2 }}
                        </p>
                        <a href="{{route('hero.edit',$hero->id) }}" class="text-center border-2 border-blue-300 text-blue-300 px-2 rounded-lg m-2 w-auto text-center mb-2 hover:border-blue-500 hover:text-blue-500">Edit</a>
                        <form action="{{ route('hero.destroy',$hero->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-center border-2 border-red-300 text-red-300 px-2 rounded-lg m-2 w-auto text-center mb-2 hover:border-red-500 hover:text-red-500">Delete</button>
                        </form>
                    </div> 
                </div>
            @endforeach

        </div>
    </div>
@endsection