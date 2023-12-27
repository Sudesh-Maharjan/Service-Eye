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
   <x-trainingbanner title="Training" shortdescription="Learn from here" description="Celebrate your journey into the world of technology with our IT training company! We specialize in comprehensive courses covering Java, Full Stack development, MERN (MongoDB, Express.js, React, Node.js), Laravel, and UI/UX design. Our expert instructors guide you through hands-on sessions, equipping you with the skills and knowledge needed to excel in the dynamic IT landscape."/>
   <div class="text-center text-2xl my-10"><span class="font-bold">Become a pro with our</span> Development Courses</div>
   <div class="" data-aos="flip-up">
      <div class="grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 container flex justify-center mx-auto">
      @foreach($courses as $course)
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