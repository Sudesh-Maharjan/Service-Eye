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
      <x-service heading="Web development"
         description="Web We carry more than just good coding skills. Our experience makes us stand out from other web development."
         image="{{ URL('images/webdev.png') }}" />
      <x-service heading="UI/UX Design"
         description="Build the product you need on time with an experienced team that uses a clear and effective design process."
         image="{{ URL('images/uiux.png') }}" />
      <x-service heading="Mobile development"
         description="Web We carry more than just good coding skills. Our experience makes us stand out from other web development."
         image="{{ URL('images/webm.png') }}" />
      <x-service heading="Game development"
         description="Game development merges creativity and technology, crafting interactive experiences that entertain, challenge, and immerse players in virtual worlds of wonder."
         image="{{ URL('images/game.png') }}" />
      <x-service heading="QA & Testing"
         description="Turn to our experts to perform comprehensive, multi-stage testing and auditing of your software."
         image="{{ URL('images/QA.png') }}" />
      <x-service heading="Hosting"
         description="Web hosting stores and makes websites accessible online, providing server space, domain support, and essential services for online presence."
         image="{{ URL('images/hosting.png') }}" />
      <x-service heading="Digital Marketing"
         description="Digital marketing leverages online channels to promote brands, products, or services, driving engagement, visibility, and conversions for businesses."
         image="{{ URL('images/digitalmarketing.png') }}" />
      <x-service heading="Branding & Identity"
         description="Your brand is the message your business is trying to communicate with your people. It is imperative that you devise a perfect brand identity that will fit in your business message."
         image="{{ URL('images/brand.png') }}" />
      <x-service heading="IT Consultancy"
         description="Trust our top minds to eliminate workflow pain points, implement new tech, and consolidate app portfolios."
         image="{{ URL('images/consulting.png') }}" />
   </div>
   <!-- Our products end -->
   <x-subscribe/>
   <x-footer/>
   <script>
   
   document.addEventListener('DOMContentLoaded', function () {
            AOS.init();
         });
   
   </script>
</body>
</html>