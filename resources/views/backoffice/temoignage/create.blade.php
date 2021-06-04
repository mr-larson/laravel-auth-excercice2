@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')

    <!--Section temoignage-->
    <div class="py-12">
        <h2 class="bg-blue-200 text-center p-2 mx-10 text-4xl font-bold rounded-lg shadow-lg">Section temoignage</h2>
        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-2 bg-yellow-200 rounded shadow-lg mx-auto p-3 w-2/5 mb-4" action="/temoignage/{{$temoignage->id}}" enctype="multipart/form-data">
            @csrf
            @method('put')
              
            <div class="m-3 col-span-2">
                <label class="text-blue-600">Figure</label>
                <select class="custom-select px-3 py-1 w-full rounded-md" name="figure">
                    <option selected>choisisse une figure</option>
                    @foreach ($chiffres as $chiffre)
                        <option value="{{ $chiffre->id }}">{{ $chiffre->figure }}</option> 
                    @endforeach
                </select>
            </div>
            <div class="m-3">
                <label class="text-blue-600">text</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" name="text">
            </div>
            <div class="flex justify-end mt-10 col-span-2">
                <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
                
        </form>
    </div>
@endsection
