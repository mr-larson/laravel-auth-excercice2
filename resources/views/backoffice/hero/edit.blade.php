@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section Hero-->
    <div class="py-12">
        <h2 class="bg-blue-200 text-center p-2 mx-10 text-4xl font-bold rounded-lg shadow-lg mb-10">Section hero</h2>
        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-1 bg-blue-200 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="/hero/" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="px-6 py-4">
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">h1</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $hero->h1 }}" name="h1">
                </div>
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">h2</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $hero->h2 }}" name="h2">
                </div>
                <div class="flex justify-end mt-10 col-span-2">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </div>     
        </form>
    </div>
@endsection
