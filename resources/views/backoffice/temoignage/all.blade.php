@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section Temoignage-->
    <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 text-xl font-light rounded-lg shadow-lg">Témoignages</h2>
        <div class="max-w-6xl mx-auto  flex justify-center align-items-center my-10">
            
            <a class="backoffice_btn rounded shadow" href="/temoignage/create"><i class='bx bx-plus'></i> Nouveau témoignage</a>
        </div>
        <div class="p-10 grid grid-cols-1  md:grid-cols-3 gap-5 max-w-6xl mx-auto">

            <!--Card-->
            @foreach ($temoignages as $temoignage)
                <div class="rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <img class="w-full" src="{{asset('img/testimonials/' . $temoignage->photo) }}" alt="img">
                        <div class="font-bold text-xl mb-2"> {{ $temoignage->author }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $temoignage->text }}
                        </p>
                        
                        <p class="text-gray-700 text-base">
                            {{ $temoignage->position }}
                        </p>
                        <a href="{{route('temoignage.edit',$temoignage->id) }}" class="text-center border-2 border-blue-300 text-blue-300 px-2 rounded-lg m-2 w-auto text-center mb-2 hover:border-blue-500 hover:text-blue-500">Edit</a>
                        <form action="{{ route('temoignage.destroy',$temoignage->id) }}" method="POST">
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