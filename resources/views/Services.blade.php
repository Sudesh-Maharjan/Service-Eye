<!DOCTYPE html>
<html lang="en">

<head>

   <title>Services</title>
   @vite('resources/css/app.css')
</head>

<body class="m-7 flex items-center flex-col">
   <!-- service banner start -->
   <div class="grid  xs:grid-cols-1 lg:grid-cols-2 items-center w-auto ">
      <div class="w-[500px] flex justify-center items-center flex-col ml-28">
         <h1 class="text-5xl m-2 font-bold">IT Consulting Services <br>
            For Your </h1>
         <p class=" mt-5 m-2 font-bold">We are leading technology solutions providing company all over the world doing
            over a years</p>
         <p class=" m-2 font-bold">Our IT Services are designed to adapt the ever-changing digital landscape. We provide
            decentralized, open-source solutions that are fast, reliable and accessible to everyone. Experience the
            power of Web3 applications with us.</p>
      </div>
      <div class=""><img src="{{URL('images/service_banner.png')}}" alt="" class="h-[600px] w-[2000px]"></div>
   </div>
   <!-- servive banner end -->

   <!-- our products -->
   <div class="flex justify-center flex-col">
      <p class="text-xl m-5 ">Service Eye processes are built for speed of iteration and innovation. We use world-class
         product engineering to transform businesses.</p>
   </div>
   <div class=" grid xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 mdl:grid-cols-2 lg:grid-cols-3 gap-16">
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
   
</body>

</html>