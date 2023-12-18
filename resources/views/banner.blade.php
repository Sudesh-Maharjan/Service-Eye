<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tailwind CSS Demo</title>
   @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
</head>

<body class="">
<x-header/>
<div class="px-24">
    <div class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row justify-center items-center">
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

        <div class="mt-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-blogcards blogtitle="Changing to a new society" update="2073-01-10" image="{{ asset('images/blogcard.png') }}" blogdescription="Hello guys my name is Rahul Maharjan. I live in Patan"/>
            <x-blogcards blogtitle="Changing to a new society" update="2073-01-10" image="{{ asset('images/blogcard.png') }}" blogdescription="Hello guys my name is Rahul Maharjan. I live in Patan"/>
            <x-blogcards blogtitle="Changing to a new society" update="2073-01-10" image="{{ asset('images/bloginisde-image.png') }}" blogdescription="Hello guys my name is Rahul Maharjan. I live in Patan"/>
        </div>
        
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
</body>

</html>

