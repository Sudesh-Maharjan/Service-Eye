<div class=" mx-auto px-4 rounded-lg flex flex-col ">
        <div class=" flex flex-wrap justify-between">
            <div class="w-auto mb-4 ">
                <div class=" training-card transition-transform transform hover:scale-130 ">
                    <div class="overflow-hidden">
                        <img src="{{$image}}" class="card-img-top training-card-image" alt="...">
                    </div>

                    <div class="card-body p-3">
                        <h5 class="card-title training-card-title text-4xl font-normal text-justified text-themecolor">
                            {{$coursename}}
                        </h5>
                        <p class="card-text training-card-text text-lg font-medium text-justified">
                            {{$coursedescription}}
                        </p>
                        <div class="flex justify-start items-center mt-2">
                            <div class="bg-gray-600 p-2 rounded-md text-white hover:bg-gray-500 xs:w-40 md:w-auto m-3">Course Detail</div>
                            <h6 class="mt-1">Duration: {{$months}} months</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>