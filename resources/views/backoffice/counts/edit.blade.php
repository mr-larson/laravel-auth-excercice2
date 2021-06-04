@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section Counts-->
    <div class="py-12">
        <h2 class="bg-blue-200 text-center p-2 mx-10 text-4xl font-bold rounded-lg shadow-lg mb-10">Section Counts</h2>
        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-1 bg-blue-200 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="/chiffre/{{$chiffre->id}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="px-6 py-4"> 
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">Figure</label>
                    <select class="custom-select px-3 py-1 w-full rounded-md" name="figure">
                        <option selected>choisis une figure</option>
                        @foreach ($chiffres as $chiffre)
                            <option {{ $chiffre->figure->id == $figure->id ? "selected" : null }} value="{{ $chiffre->id }}">{{ $chiffre->figure }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="m-3 col-span-2">
                    <label class="text-gray-700 text-base">text</label>
                    <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $chiffre->text }}" name="text">
                </div>
                <div class="flex justify-end mt-10 col-span-2">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </div>    
        </form>
    </div>
@endsection
