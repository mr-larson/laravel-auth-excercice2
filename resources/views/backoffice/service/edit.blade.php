<!--Section Service-->
<div class="py-12">
    <h2 class="bg-blue-200 text-center p-2 mx-10 text-4xl font-bold rounded-lg shadow-lg">Section Service</h2>
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-2 bg-blue-200 rounded shadow-lg mx-auto p-3 w-2/5 mb-4" action="/service/{{$service->id}}" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="px-6 py-4">
                    <div class="m-3 col-span-1">
                        <label class="text-gray-700 text-base">title</label>
                        <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $service->title }}" name="title">
                    </div>

                    <div class="m-3 col-span-1">
                        <label class="text-gray-700 text-base">icon</label> 
                        <select class="custom-select px-3 py-1 w-full rounded-md" name="service_icon">
                            <option selected>choisissez un icon</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->icon }}</option> 
                            @endforeach
                        </select>
                    </div>

                    <div class="m-3 col-span-1">
                        <label class="text-gray-700 text-base">shape</label>
                        <select class="custom-select px-3 py-1 w-full rounded-md" name="service_shape">
                            <option selected>choisissez un Shape</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->shape }}</option> 
                            @endforeach
                        </select>
                    </div>
                    
                </div>
                <div class="flex justify-end mt-10 col-span-2">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>    
        </form>

    </div>
</div>

