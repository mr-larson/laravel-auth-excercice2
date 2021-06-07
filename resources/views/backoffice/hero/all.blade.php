@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')
    <!--Section Hero-->
    <div class="py-12">
        {{-- <h2 class="backoffice_title text-center text-white py-3 mx-10 text-xl font-light rounded-lg shadow-lg">Hero Banner</h2> --}}

        <div class="grid grid-cols-1 gap-5  mx-auto">

            <!--Card-->
            @foreach ($heros as $hero)
                <div class="rounded overflow-hidden shadow-lg px-6 py-4" style="background: linear-gradient(45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <div class="titre_overview">
                            <p class="text-white opacity-60 text-center">Titre</p>
                            <p class="text-white text-base text-center pb-6 text-3xl">
                                {{ $hero->h1 }}
                            </p>
                        </div>
                        <div class="text_overview">
                            <p class="text-white opacity-60 text-center">Texte</p>
                            <p class="text-white text-base text-center text-lg">
                                {{ $hero->h2 }}
                            </p>
                        </div>
              
                        <div class="picture_overview my-8" >
                            <img src="{{ asset("img/" . $hero->image) }}" alt="" id="preview_link">
                        </div>


                        <div class="admin_btns">
                            <a href="{{route('hero.edit',$hero->id) }}" class="backoffice_btn bg-white text-center mb-2 mx-4 hover:border-blue-500 hover:text-blue-500" style="color: #6741EF">Éditer</a>
                            {{-- <form action="{{ route('hero.destroy',$hero->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button class="backoffice_btn backoffice_delete_btn m-0">Delete</button>
                            </form> --}}
                        </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection