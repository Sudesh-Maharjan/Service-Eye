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
   <x-trainingbanner title="{{$courses->name}}" shortdescription="{{ $courses->short_description }}" description="Celebrate your journey into the world of technology with our IT training company! We specialize in comprehensive courses covering Java, Full Stack development, MERN (MongoDB, Express.js, React, Node.js), Laravel, and UI/UX design. Our expert instructors guide you through hands-on sessions, equipping you with the skills and knowledge needed to excel in the dynamic IT landscape."/>
   <div class="mx-auto -mt-28">
      <div class="flex flex-wrap justify-center gap-28 mt-10" data-aos="flip-up" data-aos-duration="1500">
       <x-traininginfocard title="Batch Start Date" date="{!!$courses->Batchstartdate!!}" data-aos-duration="4000" />
       <x-traininginfocard title="Course Duration" date="{!!$courses->courseDuration!!}" data-aos-duration="4000" />
       <x-traininginfocard title="Number of seats" date="{!!$courses->numberseats!!}" data-aos-duration="4000" />
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
   <div class="mt-12 mb-4 border-black text-white mx-36 rounded-t-lg">
   <ul class="flex flex-wrap -mb-px text-sm font-medium text-center bg-gray-200 rounded-md" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
    <li class="me-2 border-2 rounded-t-md" role="presentation">
        <button class="inline-block p-4 border-b-2 rounded-t-lg focus:outline-none transition duration-300 w-40 hover:bg-gray-700 text-black hover:text-white font-bold" onclick="showTab('course')" id="course-tab" data-tabs-target="#course" type="button" role="tab" aria-controls="course" aria-selected="true">Course Overview</button>
    </li>
    <li class="me-2 border-2 rounded-t-md" role="presentation">
        <button class="inline-block p-4 border-b-2 hover:text-white rounded-t-lg focus:outline-none transition duration-300 w-40 hover:bg-gray-700 font-bold text-black" onclick="showTab('syllabus')" id="syllabus-tab" data-tabs-target="#syllabus" type="button" role="tab" aria-controls="syllabus" aria-selected="false">Syllabus</button>
    </li>
</ul>

</div>
<div id="default-tab-content">
    <div class="hidden p-4 rounded-lg " id="course" role="tabpanel" aria-labelledby="profile-tab">
    <div class="" data-aos="flip-up" data-aos-duration="1000" id="des">
      <x-description titleone="Description" titletwo='{!!htmlspecialchars_decode($courses->description)!!}'
         />
   </div>
    </div>
    <div class="hidden px-4 rounded-lg" id="syllabus" role="tabpanel" aria-labelledby="dashboard-tab">
    <div class="" id=syllabus>
   </div>
   <div class="flex flex-col items-start m-10 mx-32" data-aos="flip-up" data-aos-duration="2000">
   @foreach($courses->syllabuses as $syllabus)
   <x-accordion titleaccordion="{!!$syllabus->title!!}" titledescription="{{$syllabus->description}}" />
   @endforeach
   </div>
    </div>
</div>
<div class="flex justify-start">
   <x-heading heading="Similar Programs For You" />
   </div>
   <div class="mx-32" data-aos="flip-up">
      <div class="grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      @foreach($similiarcourse as $course)
         <x-trainingcardraj coursename="{{$course->name}}" coursedescription="{{ $course->short_description }}" months="{{$course->courseDuration}}"
            image="{{asset('uploads')}}/{{$course->image}}" a="{{route('course.inside',$course->id)}}" />
      @endforeach
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
               document.querySelectorAll('[role="tabpanel"]').forEach(tabPanel => {
            tabPanel.classList.add('hidden');
        });
        document.querySelectorAll('[role="tab"]').forEach(tab => {
            tab.classList.remove('bg-black', 'text-white', 'border-black');
            tab.setAttribute('aria-selected', 'false');
        });
         // Show the selected tab
         const selectedTab = document.getElementById(tabId);
        if (selectedTab) {
            selectedTab.classList.remove('hidden');
        }

        // Add active styles to the clicked tab
        const activeTab = document.querySelector(`[data-tabs-target="#${tabId}"]`);
        if (activeTab) {
            activeTab.classList.add('bg-black', 'text-white', 'border-black');
            activeTab.setAttribute('aria-selected', 'true');
        }
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