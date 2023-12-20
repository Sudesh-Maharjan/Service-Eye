<!DOCTYPE html>
<html lang="en">
<head>
   <title>Services</title>
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> -->
   @vite('resources/css/app.css')
</head>
<body class="flex flex-col items-center">
   <x-header/>
   <!-- service banner start -->
   <div class="grid xs:grid-cols-1 lg:grid-cols-2 " data-aos="zoom-out-right" data-aos-duration="1500">
      <div class="w-auto flex justify-center flex-col">
         <h1 class="text-5xl text-left m-2 font-bold md:w-[200px] lg:w-auto">IT Consulting Services <br>
            For Your </h1>
         <p class="mt-2 md:mt-5 m-2 font-bold md:w-[300px] lg:w-auto">We are leading technology solutions providing company all over the world doing
            over a years</p>
         <p class=" m-2 font-bold  md:w-[300px] lg:w-auto">Our IT Services are designed to adapt the ever-changing digital landscape. We provide
            decentralized, open-source solutions that are fast, reliable and accessible to everyone. Experience the
            power of Web3 applications with us.</p>
      </div>
      <div class="w-full xs:w-full md:w-[40%] lg:w-[100%] mx-4"><img src="{{URL('images/service_banner.png')}}" alt="" class="h-auto w-full"></div>
   </div>
   <!-- servive banner end -->
   <!-- our products -->
   <div class="flex flex-col m-5">
      <p class="text-md md:text-xl m-5 font-bold  md:w-[300px] lg:w-auto">Service Eye processes are built for speed of iteration and innovation. We use world-class
         product engineering to transform businesses.</p>
   </div>
   <div class=" grid xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4 ">
   @foreach($services as $service)
   <x-service heading="{!!$service->title!!}"
         description="{{$service->description}}"
         image="{{asset('uploads')}}/{{$service->icon}}" />
         @endforeach
   </div>


   <!-- Our products end -->

   <x-footer/>
   <script>
   document.addEventListener('DOMContentLoaded', function () {
            AOS.init();
         });
   </script>
</body>
</html>