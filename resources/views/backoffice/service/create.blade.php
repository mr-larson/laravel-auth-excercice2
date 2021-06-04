<!--Section Service-->
<div class="py-12">
    <h2 class="bg-blue-200 text-center p-2 mx-10 text-4xl font-bold rounded-lg shadow-lg">Section Service</h2>
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-2 bg-yellow-200 rounded shadow-lg mx-auto p-3 w-2/5 mb-4" action="/chiffre/{{$chiffre->id}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">title</div>
                    <p class="text-gray-700 text-base">
                        Text
                    </p>
                    <input type="text" class="px-3 py-1 w-full rounded-md" name="title">

                    <p class="text-gray-700 text-base">
                        Icon
                    </p>
                    <select class="custom-select px-3 py-1 w-full rounded-md" name="service_icon">
                        <option selected>choisissez un icon</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->icon }}</option> 
                        @endforeach
                    </select>

                    <p class="text-gray-700 text-base">
                        Shape
                    </p>
                    <select class="custom-select px-3 py-1 w-full rounded-md" name="service_shape">
                        <option selected>choisissez un Shape</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->shape }}</option> 
                        @endforeach
                    </select>
                    
                </div>
                <div class="flex justify-center items-start ">
                    <a href="" class="text-center border-2 border-blue-300 text-blue-300 px-2 rounded-lg m-1 w-auto text-center mb-2 hover:border-blue-500 hover:text-blue-500">Edit</a>
                </div>    
            </div>
        </form>

    </div>
</div>

