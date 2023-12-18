<div class="container mx-auto" onclick="redirectToNewPage('{{ route('bloginside') }}')">
        <div class="col ">
            <div class="card blog-card ">
                <div class="overflow-hidden image-border">
                    <img src="{{ $image }}" class="card-img-top blog-card-image object-cover transition-transform transform scale-100 hover:scale-130" alt="...">
                </div>
<div class=" py-3">
                <div class="m-3 font-family-Roboto text-sm font-semibold text-gray-600">By Service Eye on {{ $update }}</div>
                <div class="card-body m-3">
                    <h5 class="card-title blog-card-title font-family-Roboto text-xl font-bold">{{ $blogtitle }}</h5>
                    <p class="card-text blog-card-text text-sm truncate-two-lines">{{ $blogdescription }}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>
         function redirectToNewPage(bloginside) {
        window.location.href = bloginside;
    }
    </script>
