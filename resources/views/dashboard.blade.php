@extends('layouts.appFront')
@section('content')
    @include('layouts.navigation')
    <div class="p-10 grid md:grid-cols-1">
        <div class="rounded overflow-hidden shadow-lg py-12 flex flex-col justify-center align-center items-center "
            style="background: linear-gradient(
                    45deg, rgba(58, 250, 215, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
            <h2 class="text-center p-2 text-4xl text-white font-regular">Bienvenue dans l'interface admin</h2>
            <p class="text-center p-2 text-lg text-white opacity-80 font-light">Ici vous aurez accès à la gestions de vos donnés. <br>⚠️⚠️ <u>Attention chaque click entraine des conséquences ⚠️⚠️ </u><br> <span class="pt-3 block">🍬  Pour tout autre renseignement contacter la Team Carambar🍬</span></p>
        </div>
    </div>
        <!--Section Counts-->
        <div class="">
            <div class="p-10 grid sm:grid-cols-1 md:grid-cols-3  gap-5 apparition">
                <a href="{{ route('service.index') }}" class="block ">
                    <div class="rounded overflow-hidden shadow-lg py-20 flex flex-col justify-center align-center items-center"
                        style="background: linear-gradient(
                        45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <p class="text-white text-3xl">Services</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer les services</p>
                    </div>
                </a>

                <a href="{{ route('temoignage.index') }}" class="block ">
                    <div class="rounded overflow-hidden shadow-lg py-20 flex flex-col justify-center align-center items-center"
                        style="background: linear-gradient(
                                        45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <p class="text-white text-3xl">Témoignages</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer les témoignages</p>
                    </div>
                </a>

                <a href="{{ route('chiffre.index') }}" class="block ">
                    <div class="rounded overflow-hidden shadow-lg py-20 flex flex-col justify-center align-center items-center"
                        style="background: linear-gradient(
                                        45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url('{{ asset('img/hero-bg.jpg') }}'); background-size: cover;">
                        <p class="text-white text-3xl">Chiffres</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer les chiffres</p>
                    </div>
                </a>
            </div>
        </div>
@endsection
