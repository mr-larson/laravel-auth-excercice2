@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section Service-->
    <div class="py-12">
        <h2 class="backoffice_title text-center text-white py-3 mx-10 text-xl font-light rounded-lg shadow-lg">Services</h2>

     
        <div class="backoffice_btn rounded shadow mx-auto my-10">
            <i class='bx bx-plus'></i>
            <a class="" href="/service/create">Nouveau service</a>
        </div>
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

            <!--Card-->
            @foreach ($services as $service)
                <div class="rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $service->title }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $service->text }}
                        </p>
                        <div class="icon-box {{ $service->color }} ">
                            <div class="icon">
                                <svg width="100" height="100" style="fill: green;" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    {!! $service->shape !!}
                                </svg>
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <h4><a href="">{{ $service->title }}</a></h4>
                            <p>{{ $service->text }}</p>
                        </div>
                        <a href="{{route('service.edit',$service->id) }}" class="text-center border-2 border-blue-300 text-blue-300 px-2 rounded-lg m-2 w-auto text-center mb-2 hover:border-blue-500 hover:text-blue-500">Edit</a>
                        <form action="{{ route('service.destroy',$service->id) }}" method="POST">
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