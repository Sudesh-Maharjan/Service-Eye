<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Projects</title>
   @vite('resources/css/app.css')
</head>
<body>

<div class="container mx-auto">

<header class="p-8 ">
            <h2 class="title text-3xl font-bold text-blue-800 text-center mb-4">Our Projects</h2>
            <p class="description text-center text-gray-700 mb-8">Software development outsourcing is just a tool to
                achieve business goals. But there is no way to get worthwhile results without cooperation and trust
                between a client company.</p>
            <div class="categories flex justify-center items-center mb-8 gap-4">
                <a href="#" class="category text-blue-800 hover:underline">All</a>
                <a href="#" class="category text-blue-800 hover:underline">Design</a>
                <a href="#" class="category text-blue-800 hover:underline">Development</a>
                <a href="#" class="category text-blue-800 hover:underline">Ideas</a>
                <a href="#" class="category text-blue-800 hover:underline">Technology</a>
            </div>
        </header>
</div>
<div class="flex flex-wrap justify-center">
      <x-project projectimages="{{URL('images/project1.png')}}" />
      <x-project projectimages="{{URL('images/project1.png')}}" />
      <x-project projectimages="{{URL('images/project1.png')}}" />
      <x-project projectimages="{{URL('images/project1.png')}}" />
      <x-project projectimages="{{URL('images/project1.png')}}" />
      <x-project projectimages="{{URL('images/project1.png')}}" />
   </div>
</body>
</html>