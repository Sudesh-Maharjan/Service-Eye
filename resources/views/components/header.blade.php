<style>
      .nav-link:hover {
        border-bottom: 2px solid #3490dc; /* Highlight on hover */
    }

    .nav-link.active {
        border-bottom: 2px solid #3490dc; /* Underline for active page */
    }
</style>


<div class="flex items-center justify-between p-4 w-full h-[110px]  sticky top-0 bg-white shadow-md z-20">
    <a class="navbar-brand" href="{{url('/services')}}"><img src="{{url('images/header.png')}}" class="h-[110px] p-2" alt=""></a>

    <div class="flex justify-center items-center m-5 lg:hidden">
        <!-- Button to toggle the navbar on small screens -->
        <button id="navbar-toggler" class="text-black hover:text-gray-700">
            <svg class="w-11 h-11" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <div class=" justify-center items-center m-5 hidden lg:flex ">
        <!-- Navbar links for larger screens -->
        <ul class="list-reset flex justify-end items-center space-x-5 ">
            <li>
                <a href="#" class="font-bold text-black hover:text-gray-700 nav-link">Home</a>
            </li>
            <li>
                <a href="#" class="font-bold text-black hover:text-gray-700 nav-link">About Us</a>
            </li>
            <li>
                <a href="{{route('services')}}" class="font-bold text-black hover:text-gray-700 nav-link">Services</a>
            </li>
            <li>
                <a href="{{url('/project')}}" class="font-bold text-black hover:text-gray-700 nav-link">Portfolio</a>
            </li>
            <li>
                <a href="{{url('/training')}}" class="font-bold text-black hover:text-gray-700 nav-link">Training</a>
            </li>
        </ul>
    </div>

    <div class="flex justify-end items-center hidden lg:flex">
        <!-- Enroll With Us button for larger screens -->
        <a href="#" class="font-bold text-white bg-blue-800 rounded px-4 py-2 hover:bg-blue-700">Enroll With Us</a>
    </div>
</div>

<!-- Responsive Navbar for small screens -->
<div id="responsive-navbar" class="hidden lg:hidden">
    <ul class="list-reset flex flex-col items-center space-y-5">
        <li>
            <a href="#" class="font-bold text-black hover:text-gray-700">Home</a>
        </li>
        <li>
            <a href="#" class="font-bold text-black hover:text-gray-700">About Us</a>
        </li>
        <li>
            <a href="#" class="font-bold text-black hover:text-gray-700">Services</a>
        </li>
        <li>
            <a href="#" class="font-bold text-black hover:text-gray-700">Portfolio</a>
        </li>
        <li>
            <a href="#" class="font-bold text-black hover:text-gray-700">Training</a>
        </li>
        <li>
            <a href="#" class="text-decoration-none font-bold text-white bg-themecolor rounded px-4 py-2 hover:bg-opacity-80">Enroll With Us</a>
        </li>
    </ul>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            navLinks.forEach(function (otherLink) {
                otherLink.classList.remove('active');
            });

            link.classList.add('active');
        });
    });

    document.getElementById('navbar-toggler').addEventListener('click', function () {
        document.getElementById('responsive-navbar').classList.toggle('hidden');
    });
});

</script>
