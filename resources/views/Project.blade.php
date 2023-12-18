<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <title>Projects</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="container mx-auto">
        <x-header />
        <header class="p-8 flex flex-col items-center">
        <x-heading heading="Our Projects" />

            <p class="description text-center text-gray-700 mb-8 w-2/3 text-lg font-bold">Software development
                outsourcing is just a tool to
                achieve business goals. But there is no way to get worthwhile results without cooperation and trust
                between a client company.</p>
            <div class="categories font-bold text-2xl flex justify-center items-center mb-8 gap-6">
                <a href="#" class="category text-blue-800 hover:underline">All</a>
                <a href="#" class="category text-blue-800 hover:underline">Design</a>
                <a href="#" class="category text-blue-800 hover:underline">Development</a>
                <a href="#" class="category text-blue-800 hover:underline">Ideas</a>
                <a href="#" class="category text-blue-800 hover:underline">Technology</a>
            </div>
        </header>
    </div>
    <div class="px-20">
        <div class="flex flex-wrap justify-center" data-aos="flip-left" data-aos-duration="1500">
            <x-project projectimages="{{URL('images/project1.png')}}" />
            <x-project projectimages="{{URL('images/project1 6.png')}}" />
            <x-project projectimages="{{URL('images/project1 7.png')}}" />
            <x-project projectimages="{{URL('images/project1 8.png')}}" />
            <x-project projectimages="{{URL('images/project1 9.png')}}" />
            <x-project projectimages="{{URL('images/project2 6.png')}}" />
            <x-project projectimages="{{URL('images/project2 7.png')}}" />
            <x-project projectimages="{{URL('images/project2 8.png')}}" />
            <x-project projectimages="{{URL('images/project2 9.png')}}" />
            <x-project projectimages="{{URL('images/project3 5.png')}}" />
            <x-project projectimages="{{URL('images/project3 6.png')}}" />
            <x-project projectimages="{{URL('images/project3 7.png')}}" />
        </div>
    </div>
    <div class="grid grid-cols-4 px-20 m-10">
    <x-teamcard />
    <x-teamcard />
    <x-teamcard />
    <x-teamcard />
    <x-teamcard />
    <x-teamcard />
    </div>
    <x-footer />
    <script>
   
   document.addEventListener('DOMContentLoaded', function () {
            AOS.init();
         });
   
   </script>
</body>

</html>