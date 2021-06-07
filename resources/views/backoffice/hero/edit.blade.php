@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section Hero-->
    <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 text-4xl font-light rounded-lg shadow-lg">Hero Banner</h2>
        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-1 my-10 rounded shadow-lg mx-auto max-w-6xl p-3 px-6 py-4 mb-4" action="/hero/{{ $hero->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="my-4 col-span-2">
                    <label class="text-gray-500 text-base">Grand titre</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $hero->h1 }}" name="h1">
                </div>
                <div class="my-4  col-span-2">
                    <label class="text-gray-500 text-base">Texte d'accompagnement</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $hero->h2 }}" name="h2">
                </div>
                <div class="my-4  col-span-2" >
                    <label class="text-gray-500 text-base">Image de la couverture</label>
                    {{-- <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $hero->h2 }}" name="h2"> --}}
                    <div class="picture_overview" style="background: linear-gradient(45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <img src="{{ asset("img/" . $hero->image) }}" alt="" id="preview_link">
                    </div>
                    <input name="image" class="border border-gray-300 p-3 w-full rounded-sm" type="file" id="pictureSelector">
                </div>
      
                <div class="admin_btns">
                    <i class='bx bx-arrow-back'></i>
                    <a class="backoffice_btn backoffice_delete_btn m-0 mx-3" href="{{ route('hero.index') }}">Annuler</a>
                    <button type="submit" class="backoffice_btn">Confirmer les modifications</button>
                </div>
        </form>
    </div>
@endsection
