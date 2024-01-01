@extends("layouts.app")
@section("title")

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blog</title>
@vite('resources/css/app.css')
<link rel="stylesheet" href="{{ asset('css/banner.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<style>
    .truncate-lines {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* Number of lines to show */
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endsection
@section("content")

<body class="">

    <div class="md:mx-36">
        <div class="container mx-auto p-4">
            <div class="flex flex-col md:flex-row justify-center items-center " data-aos="fade-right" data-aos-duration="1500">
                <div class="md:w-1/2 lg:w-5/12">
                    <div class="text-7xl font-bold text-blue-950">BLOG</div>
                    <div class="text-black text-1xl font-bold">Our blogs aim to provide the latest news and insights on various topics in the easiest way.</div>
                </div>
                <div class=" flex justify-center">
                    <div class="p-4">
                        <img src="{{ asset('images/blog.gif') }}" class="w-[500px]" alt="Banner Blog">
                    </div>
                </div>
            </div>
            @if(count ($blogs) > 0)
            <div class="mt-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-aos-duration="1500">
                @foreach($blogs as $blog)
                <a href="{{route('blog.insideblog',$blog->id)}}"> <x-blogcards blogtitle="{{$blog->title}}" id="{{$blog->id}}" update="{{$blog->updated_at}}" image="{{asset('uploads')}}/{{$blog->image}}" blogdescription="{!!$blog->description!!}" /></a>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
            // animateNumbers();
        });
    </script>
    @endsection