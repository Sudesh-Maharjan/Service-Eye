<!DOCTYPE html>
<html lang="en">
<head>
   @vite('resources/css/app.css')
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Training</title>
</head>
<body>
   <x-header />
   <x-trainingbanner />
   <div class="mx-auto -mt-20">
      <h1 class="text-black">Syllabus</h1>
      <div class="flex flex-wrap justify-center gap-16 mt-10">
         @for ($i = 0; $i
         < 3; $i++) <x-traininginfocard title="Batch Start Date" date="Jan. 24 2023" />
         @endfor
      </div>
   </div>
   <div class="mx-auto mt-10">
      <div
         class="text-left ml-20 text-[32px] font-bold leading-[29px] text-[#324465] relative flex items-center justify-start">
         <span>
            <span class="why-join-this-programs-span">Why Join This </span>
            <span class="why-join-this-programs-span2 opacity-50 ">Programs</span>
            <span class="why-join-this-programs-span2 ">?</span>
         </span>
      </div>
      <div class="flex flex-wrap justify-center gap-16 mt-10">
         <x-trainingcard w1="Real" 
         w2="World" 
         desc="Get insights on how ai is across companies like E-sewa ,Daraz, Khalti... more"
          tcimg="{{URL('images/rocket 1.png')}}" />
         <x-trainingcard w1="Learn From" w2="Service Eye" desc="learn live from top Dursikshya faculty with online master classes" tcimg="{{URL('images/rocket 2.png')}}" />
         <x-trainingcard w1="Leave From" w2="World" desc="learn how ai can be applied across business functions such as UI/UX Developer" tcimg="{{URL('images/rocket 3.png')}}" />
      </div>
   </div>

   <x-accordion/>
   <x-footer/>
</body>
</html>