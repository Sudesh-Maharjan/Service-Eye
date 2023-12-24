<style>
      .nav-link:hover {
        border-bottom: 2px solid #3490dc; 
    }

    .nav-link.active {
        border-bottom: 2px solid #3490dc;
    }
     /* Sidebar styles */
     .sidebar {
            position: fixed;
            top: 0;
            right: -200px;
            width: 200px;
            height: 100%;
            background-color: #9EA3A8;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding-top: 60px; 
            transition: 0.3s;
            overflow-x: hidden;
            z-index: 1000; 
        }

        .sidebar a {
            padding: 8px 16px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: white;
        }

        .content {
            margin-right: 0;
            transition: 0.3s;
            padding: 16px;
        }
        .close-btn {
            position: absolute;
            top: 16px;
            right: 16px;
            cursor: pointer;
        }
</style>


<div class="flex items-center justify-between w-full h-[110px]  sticky top-0 bg-white shadow-md z-20">
    <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('images/header.png')}}" class="h-[110px] p-2" alt=""></a>

    

    <div class=" justify-center items-center m-5 hidden lg:flex ">
        <!-- Navbar links for larger screens -->
        <ul class="list-reset flex justify-end items-center space-x-5 ">
            <li>
                <a href="{{route('Homepage')}}" class="font-bold text-black hover:text-gray-700 nav-link">Home</a>
            </li>
            <li>
                <a href="{{url('/about')}}" class="font-bold text-black hover:text-gray-700 nav-link">About Us</a>
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
            <li>
                <a href="{{url('/blog')}}" class="font-bold text-black hover:text-gray-700 nav-link">Blog</a>
            </li>
        </ul>
    </div>

    <div class=" justify-end items-center hidden md:flex ">
        <!-- Enroll With Us button for larger screens -->
        <a href="{{url('/contactus')}}" class="font-bold text-white bg-blue-950 rounded px-4 py-2 hover:bg-blue-800 ">Enroll With Us</a>
    </div>

    <div class="flex justify-center items-center m-5 lg:hidden">
<div class="flex justify-center items-center m-5 lg:hidden">
    <button id="navbar-toggler" class="text-black hover:text-gray-700">
        <svg class="w-11 h-11" fill="none" stroke="currentColor" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>
</div>

    </div>
</div>

<!-- Responsive Navbar for small screens -->

<!-- Sidebar -->
<div id="sidebar" class="sidebar">
<a class="navbar-brand" href="{{url('/')}}"><img src="{{url('images/header.png')}}" class="h-[80px] p-2" alt=""></a>

<span class="close-btn text-3xl" onclick="closeSidebar()">&times;</span>
 <a href="{{route('Homepage')}}" class="font-bold text-black hover:text-gray-700 nav-link">Home</a>
<a href="{{url('/about')}}" class="font-bold text-black hover:text-gray-700 nav-link">About Us</a>
<a href="{{route('services')}}" class="font-bold text-black hover:text-gray-700 nav-link">Services</a>
<a href="{{url('/project')}}" class="font-bold text-black hover:text-gray-700 nav-link">Portfolio</a>
<a href="{{url('/training')}}" class="font-bold text-black hover:text-gray-700 nav-link">Training</a>
<a href="{{url('/blog')}}" class="font-bold text-black hover:text-gray-700 nav-link">Blog</a>
<a href="{{url('/contactus')}}" class="shadow-lg bg-gray-500 p-3 rounded-lg  font-bold m-4 hover:bg-white hover:text-black ">Enroll With Us</a>
    <!-- Add more links as needed -->
</div>



<!-- end Responsive Navbar for small screens -->

<script >
 function closeSidebar() {
    const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main');
        sidebar.style.right = '-200px';
        mainContent.style.marginRight = '0';
    }

 document.addEventListener('DOMContentLoaded', function () {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main');
        const navbarToggler = document.getElementById('navbar-toggler');

        navbarToggler.addEventListener('click', function () {
            const isHidden = sidebar.style.right === '-200px'; // Check if the sidebar is hidden
            sidebar.style.right = isHidden ? '0' : '-200px'; // Toggle the sidebar visibility
            mainContent.style.marginRight = isHidden ? '200px' : '0'; // Adjust the main content margin
        });
        closeSidebar();
    });
</script>
