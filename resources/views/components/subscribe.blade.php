
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

<div class="h-52 w-auto bg-white m-10 flex justify-center items-center flex-row relative"  data-aos="zoom-in-up" data-aos-duration="1500">
   <div class="">
      <img src="{{URL('images/Vector.png')}}" alt="Arrow" class="m-5">
   </div>
   <div class="m-5">
   <h1 class="text-4xl font-bold m-5">
      Subscribe To Our Newsletter
   </h1>
   <div class="h-auto flex justify-center items-center m-5">
      <input type="text" class="h-[60px] w-[600px] border-2 p-3"> <button
         class="bg-blue-950 h-[60px] text-white p-3 z-10">Subscribe Now</button>
   </div>
      <img src="{{URL('images/pngwing 1.png')}}" alt="" class="rounded-full w-[300px] absolute left-[790px] -top-9 rotating-image">
      </div>
</div>