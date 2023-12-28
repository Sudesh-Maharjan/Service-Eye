
<style>
    .rotating-image {
        animation: rotate 3s linear infinite; /* Adjust the duration as needed */
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
</style>

<div class="h-auto  bg-white m-10  flex flex-row relative justify-center"  data-aos="zoom-in-up" data-aos-duration="1500">
   <div class="md:hidden lg:flex">
      <img src="{{URL('images/Vector.png')}}" alt="Arrow" class="m-3 md:10 lg:h-20">
   </div>
   <div class="m-5">
   <h1 class="text-4xl font-bold m-5">
      Subscribe To Our Newsletter
   </h1>
   <div class="h-auto flex justify-center items-center m-5 w-auto">
      <input type="text" class="h-[60px] md:w-[150px] lg:w-[600px] border-2 p-3"> <button
         class="bg-blue-950 h-[60px] text-white p-5 z-10 flex justify-center items-center">Subscribe Now</button>
   </div>
      <img src="{{URL('images/pngwing 1.png')}}" alt="" class="rounded-full hidden md:flex md:w-[130px] lg:w-[200px] absolute md:left-[300px] lg:left-[800px]  md:-top-2 lg:-top-2 rotating-image">
      </div>
</div>