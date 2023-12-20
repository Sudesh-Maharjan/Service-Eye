<!DOCTYPE html>
<html lang="en">
<head>
   @vite('resources/css/app.css')
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> -->
   <title>Training</title>
   <link rel="stylesheet" href="{{ asset('css/trainingcard.css') }}">
</head>
<body>
   <x-header />
   <x-trainingbanner />
   <div class="mx-auto -mt-28">
      <h1 class="text-black">Syllabus</h1>
      <div class="flex flex-wrap justify-center gap-16 mt-10" data-aos="flip-up" data-aos-duration="1500">
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
      <div class="flex flex-wrap justify-center gap-16 mt-10" data-aos="flip-up" data-aos-duration="1500">
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
   <div class="flex justify-center gap-10 m-5 text-white bg-blue-950">
      <button class="m-3 p-3 w-34 h-16 hover:cursor-pointer bg-transparent font-bold" onclick="overview()">Course
         Overview</button>
      <button class=" m-3 p-3 w-34 h-16 hover:cursor-pointer bg-transparent font-bold"
         onclick="syllabusection()">Syllabus</button>
   </div>
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
   <div class="" id=syllabus>
      <x-heading heading="Syllabus" />
   </div>
   <div class="flex flex-col items-center m-10" data-aos="flip-up" data-aos-duration="2000">
      <x-accordion titleaccordion="HTML Fundamentals" />
      <x-accordion titleaccordion="Css Fundamentals" />
      <x-accordion titleaccordion="JavaScript Fundamentals" />
   </div>
   <x-heading heading="Similar Programs For You" />
   <div class="" data-aos="flip-up">
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
    // Customize AOS configurations here
    offset: 1, // Adjust the offset value as needed
  });
         animateNumbers();
      });
      //  start scroll on click
      function syllabusection() {
         const syllabus = document.getElementById('syllabus');
         const navbarHeight = 150;
         console.log(syllabus);
         if (syllabus) {
            const offset = syllabus.offsetTop - navbarHeight;
            window.scroll({ top: offset, left: 0, behavior: 'smooth' });
         }
      }
      function overview() {
         const des = document.getElementById('des');
         const navbarHeight = 150;
         if (des) {
            const offset = des.offsetTop - navbarHeight;
            window.scroll({ top: offset, left: 0, behavior: 'smooth' });
         }
      }
      //  end scroll on click
   </script>
</body>
</html>