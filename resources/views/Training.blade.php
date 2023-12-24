<!DOCTYPE html>
<html lang="en">
<head>
   @vite('resources/css/app.css')
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
   <title>Training</title>
   <link rel="stylesheet" href="{{ asset('css/trainingcard.css') }}">
</head>
<body>
   <x-header />
   <x-trainingbanner />
   <div class="mx-auto -mt-28">
      <h1 class="text-black">Syllabus</h1>
      <div class="flex flex-wrap justify-center gap-28 mt-10" data-aos="flip-up" data-aos-duration="1500">
         @for ($i = 0; $i
         < 3; $i++) <x-traininginfocard title="Batch Start Date" date="Jan. 24 2023" data-aos-duration="4000" />
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
      <div class="flex flex-wrap justify-center gap-40 mt-10" data-aos="flip-up" data-aos-duration="1500">
      @foreach($courses->programs as $program)

<x-trainingcard w1="{{$program->title}}" w2="World"
   desc="{{$program->description}}"
   tcimg="{{asset('uploads')}}/{{$program->icon}}" />
@endforeach
        
      </div>
   </div>
   <!-- tailwind tabs -->
   <div class="mt-12 mb-4 border-black text-white shadow-lg rounded-xl                                                                                                                                                                                                                 dark:border-gray-700 mx-40 rounded-t-lg">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg focus:outline-none transition duration-300 hover:bg-gray-700 bg-black text-white"  onclick="showTab('course')" id="course-tab" data-tabs-target="#course" type="button" role="tab" aria-controls="course" aria-selected="true">Course Overview</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg focus:outline-none transition duration-300  hover:bg-gray-700 bg-black text-gray-300" onclick="showTab('syllabus')" id="syllabus-tab" data-tabs-target="#syllabus" type="button" role="tab" aria-controls="syllabus" aria-selected="false">Syllabus</button>
        </li>
    </ul>
</div>
<div id="default-tab-content">
    <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="course" role="tabpanel" aria-labelledby="profile-tab">
    <div class="" data-aos="flip-up" data-aos-duration="1000" id="des">
      <x-description titleone="Description" titletwo='{!!$courses->description!!}'
         />
   </div>
    </div>
    <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="syllabus" role="tabpanel" aria-labelledby="dashboard-tab">
    <div class="" id=syllabus>
      <x-heading heading="Syllabus" />
   </div>
   <div class="flex flex-col items-center m-10" data-aos="flip-up" data-aos-duration="2000">
   @foreach($courses->syllabuses as $syllabus)
   <x-accordion titleaccordion="{!!$syllabus->title!!}" titledescription="{!!$syllabus->description!!}" />


   @endforeach

   </div>
    </div>
</div>
   <!-- tailwind tabs -->
   <x-heading heading="Similar Programs For You" />
   <div class="mx-32" data-aos="flip-up">
      <div class="grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
         <!-- Include your Tailwind CSS components here -->
       
      </div>
   </div>
   </div>
   <x-footer />
   <script>
    document.addEventListener('DOMContentLoaded', function () {
                AOS.init({
  disable: function() {
    var maxWidth = 1200;
    return window.innerWidth < maxWidth;
  }
}); 
document.getElementById("course-tab").click();
                // animateNumbers();
            });
            function showTab(tabId) {
        // Hide all tab contents
        const tabContents = document.querySelectorAll('[role="tabpanel"]');
        tabContents.forEach((content) => {
            content.classList.add('hidden');
        });
        // Show the clicked tab content
        const clickedTabContent = document.getElementById(tabId);
        if (clickedTabContent) {
            clickedTabContent.classList.remove('hidden');
        }
    }
   </script>
</body>
</html>