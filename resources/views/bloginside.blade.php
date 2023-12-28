<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Blogs Inside</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    
    <link rel="stylesheet" href="{{ asset('css/bloginside.css') }}">
  </head>
  <body>
    <x-header/>
  

    <div class="container mx-auto justify-center">
       
    <x-bloginside blogtitle="{{$blogs->title}}" update="{{$blogs->updated_at}}" image="{{asset('uploads')}}/{{$blogs->image}}" blogdescription="{!!$blogs->description!!}" />
    <x-footer/>
  </body>
</html>