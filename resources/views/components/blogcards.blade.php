

<div class="container mx-auto p-4">
        <div class="col">
            <div class="card blog-card">
                <div class="overflow-hidden image-border">
                    <img src="{{ $image }}" class="card-img-top blog-card-image object-cover transition-transform transform scale-100 hover:scale-130" alt="...">
                </div>

                <div class="blog-date font-family-Roboto text-sm font-semibold mt-3 ml-2">By Service Eye on {{ $update }}</div>
                <div class="card-body">
                    <h5 class="card-title blog-card-title font-family-Roboto text-xl font-medium">{{ $blogtitle }}</h5>
                    <p class="card-text blog-card-text text-sm truncate-two-lines">{{ $blogdescription }}</p>
                </div>
            </div>
        </div>
    </div>
