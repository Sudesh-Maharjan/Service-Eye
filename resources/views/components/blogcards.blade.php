

<div class="container mx-auto p-4">
    
    <div class="col  ">
            <div class="card blog-card  rounded-lg">
                <div class="overflow-hidden image-border">
                    <img src="{{ $image }}" class="card-img-top blog-card-image w-full  object-cover transition-transform transform scale-100 hover:scale-130" alt="...">
                </div>

                <div class="blog-date font-family-Roboto text-sm font-semibold mt-3 ml-2">By Service Eye on {{ $update }}</div>
                <div class="card-body p-3">
                    <h5 class="card-title blog-card-title font-family-Roboto text-xl font-medium">{{ $blogtitle }}</h5>
                    <p class="card-text blog-card-text text-sm truncate-two-lines">{!!$blogdescription !!}</p>
                </div>
            </div>
        </div>

       
    </div>
    <!-- <div class="container mx-auto p-4">
    <div class="col">
        <div class="card blog-card bg-white  overflow-hidden shadow-md hover:shadow-lg transition-transform transform scale-100 hover:scale-105">
            <div class="overflow-hidden image-border">
                <img src="{{ $image }}" class="card-img-top blog-card-image w-full h-48 object-cover" alt="...">
            </div>

            <div class="blog-date font-family-Roboto text-sm font-semibold mt-3 mb-6 ml-2">By Service Eye on {{ $update }}</div>
            <div class="card-body">
                <h5 class="card-title blog-card-title font-family-Roboto text-xl font-medium">{{ $blogtitle }}</h5>
                <p class="card-text blog-card-text text-sm truncate-two-lines">{{ $blogdescription }}</p>
            </div>
        </div>
    </div>
</div> -->

