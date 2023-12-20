<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tailwind CSS Demo</title>
   @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>
<body class="">
<x-header/>
<div class="px-24" >
    <div class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row justify-center items-center" data-aos="fade-right"
            data-aos-duration="1500">
            <div class="md:w-1/2 lg:w-5/12">
                <div class="text-5xl font-bold text-black">BLOG</div>
                <div class="text-black font-bold">Our blogs aim to provide the latest news and insights on various topics in the easiest way.</div>
            </div>
            <div class="md:w-1/2 lg:w-7/12 flex justify-center">
                <div class="p-4">
                    <img src="{{ asset('images/blogbanner.png') }}" class="w-full" alt="Banner Blog">
                </div>
            </div>
        </div>
        <div class="mt-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-left"
            data-aos-duration="1500">
            @foreach($blogs as $blog)
            <a href="{{route('blog.insideblog',$blog->id)}}"> <x-blogcards blogtitle="{{$blog->title}}" id="{{$blog->id}}" update="{{$blog->updated_at}}" image="{{asset('uploads')}}/{{$blog->image}}" blogdescription="{{$blog->description}}"/></a>
            @endforeach
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <script>
         document.addEventListener('DOMContentLoaded', function () {
        AOS.init();
        // animateNumbers();
    });
    </script>
</body>
</html>