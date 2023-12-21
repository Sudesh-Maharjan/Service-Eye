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
         <x-trainingcard w1="Real" w2="World"
            desc="Get insights on how ai is across companies like E-sewa ,Daraz, Khalti... more"
            tcimg="{{URL('images/rocket 1.png')}}" />
         <x-trainingcard w1="Learn From" w2="Service Eye"
            desc="learn live from top Dursikshya faculty with online master classes"
            tcimg="{{URL('images/rocket 2.png')}}" />
         <x-trainingcard w1="Leave From" w2="World"
            desc="learn how ai can be applied across business functions such as UI/UX Developer"
            tcimg="{{URL('images/rocket 3.png')}}" />
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
      <x-description titleone="Description" titletwo="Full Stack Product Engineer Using MERN"
         titlethree="How the course is designed?" titlefour="Advantage of studying MERN"
         descriptionone="Celebrate your journey into the world of technology with our IT training company! We specialize in comprehensive courses covering Java, Full Stack development, MERN MongoDB, Express.js, React, Node.js, Laravel, and UI/UX design. Our expert instructors guide you through hands-on sessions, equipping you with the skills and knowledge needed to excel in the dynamic IT landscape. Whether you're a beginner or looking to upskill, join us on this transformative learning experience and unlock a future filled with endless possibilities in the world of software development and design."
         descriptiontwo="
In MERN you will learn MongoDB which is classified as NOSQL document-oriented database. Data in MongoDB is stored in JSON based query language. It is flexible and easy to scale. Another component you will learn is Express popularly known as backend web application framework. The express framework is being used to develop robust web applications. Another component of MERN course is react which is JavaScript library popular to build user interface and interactivity on the client side. Some of the popular web applications like Facebook extensively uses react in the frontend for interactivity. React was first introduced by a developer in Facebook. React is an alternate to Angular JS a frontend application development framework which differentiates MERN from MEAN course. Node.js is a cross platform JavaScript runtime environment used to build scalable network applications."
         descriptionthree="
In this full stack developer course, MERN developer will use JavaScript on both the frontend and backend hence there is no need to learn a new programming language. Moreover, JavaScript is a loosely type language and easy to learn. A person having a knowledge of C programming can easily master JavaScript since the syntax of both the language is similar. Hence, a person having knowledge of C can easily excel JavaScript. There is a great scope of MERN stack developer in software companies these days. MERN stack developers are highly efficient for developing robust web applications across the web.
Prerequisite
If you want to study MERN stack developer course then you need to have a basic understanding of web along with HTML and CSS. However, it is necessary to have a good understanding of Object Oriented Programming. If you are an existing backend application developer and want to switch to MERN then it will be very easy for you to understand the course." />
   </div>
    </div>
    <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="syllabus" role="tabpanel" aria-labelledby="dashboard-tab">
    <div class="" id=syllabus>
      <x-heading heading="Syllabus" />
   </div>
   <div class="flex flex-col items-center m-10" data-aos="flip-up" data-aos-duration="2000">
      <x-accordion titleaccordion="HTML Fundamentals" />
      <x-accordion titleaccordion="Css Fundamentals" />
      <x-accordion titleaccordion="JavaScript Fundamentals" />
   </div>
    </div>
   
</div>
   <!-- tailwind tabs -->

   <x-heading heading="Similar Programs For You" />
   <div class="mx-32" data-aos="flip-up">
      <div class="grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
         <!-- Include your Tailwind CSS components here -->
         <x-trainingcardraj coursename="Python" coursedescription="Full stack python course" months="3"
            image="{{ asset('images/bloginisde-image.png') }}" />
         <x-trainingcardraj coursename="Mern" coursedescription="Full stack mern course" months="2"
            image="{{ asset('images/bloginisde-image.png') }}" />
         <x-trainingcardraj coursename="Python" coursedescription="Full stack python course" months="5"
            image="{{ asset('images/bloginisde-image.png') }}" />
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