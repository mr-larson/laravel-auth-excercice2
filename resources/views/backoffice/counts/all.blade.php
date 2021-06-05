@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section Counts-->
    <div class="py-12">
        <h2 class="bg-blue-200 text-center p-2 mx-10 text-4xl font-bold rounded-lg shadow-lg apparition1">Section Counts</h2>
        <div class="max-w-6xl mx-auto  flex justify-center my-10 apparition1">
            <a class="bg-blue-300 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded shadow" href="/counts/create">Create</a>
        </div>
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">

            <!--Card-->
            @foreach ($chiffres as $chiffre)
                <div class="rounded overflow-hidden shadow-lg apparition">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $chiffre->figure }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $chiffre->text }}
                        </p>
                        <a href="{{route('chiffre.edit',$chiffre->id) }}" class="text-center border-2 border-blue-300 text-blue-300 px-2 rounded-lg m-2 w-auto text-center mb-2 hover:border-blue-500 hover:text-blue-500">Edit</a>
                        <form action="{{ route('chiffre.destroy',$chiffre->id) }}" method="POST">
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