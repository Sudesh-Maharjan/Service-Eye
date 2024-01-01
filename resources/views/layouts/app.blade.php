<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    @yield("title")
</head>
<body>
    <x-header />
    @yield("content")
    <footer class="relative w-full mt-4 bg-themecolor">
        <div class="box py-12 px-4 md:px-8 lg:px-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="sec aboutus">
                <img src="{{url('images/logowhitema.png')}}" alt="" width="120px">
                <p id="log" class="text-white mt-4 md:mt-0 md:ml-4">
                    Best and reliable Digital Marketing company with expertise in SEO, Software Development, Web Design
                    / Development, and Mobile application.
                </p>
            </div>
            <div class="sec quicklinks">
                <div class="text-white text-base font-bold ">USEFUL LINKS</div>
                <div class="Group37 w-28 h-1 mb-2 md:mb-6 relative">
                    <div class="Rectangle73 w-14 h-0.5 left-[55px] top-[1px] absolute bg-zinc-300 rounded-sm"></div>
                    <div class="Rectangle72 w-14 h-1 left-0 top-0 absolute bg-white rounded-sm"></div>
                </div>
                <ul id="myList1">
                    <li><a href="/" class="text-white">Home</a></li>
                    <li><a href="/about" class="text-white">About</a></li>
                    <li><a href="/about" class="text-white">Team</a></li>
                    <!-- <li><a href="/" class="text-white">Career</a></li> -->
                    <li><a href="/contactus" class="text-white">Contact</a></li>
                    <!-- <li><a href="/" class="text-white">Privacy</a></li>
                    <li><a href="#" class="text-white">Policy</a></li> -->
                </ul>
            </div>
            <div class="sec quicklinks">
                <div class=" text-white text-base font-bold ">OUR SERVICES</div>
                <div class="Group37 w-28 h-1  mb-6 relative">
                    <div class="Rectangle73 w-14 h-0.5 left-[55px] top-[1px] absolute bg-zinc-300 rounded-sm"></div>
                    <div class="Rectangle72 w-14 h-1 left-0 top-0 absolute bg-white rounded-sm"></div>
                </div>
                <ul id="myList2">
                    @foreach($services as $service)
                    <li><a href="/services" class="text-white">{{$service->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="sec contact">
                <div class=" text-white text-base font-bold ">QUICK CONTACT</div>
                <div class="Group37 w-28 h-1  mb-6 relative">
                    <div class="Rectangle73 w-14 h-0.5 left-[55px] top-[1px] absolute bg-zinc-300 rounded-sm"></div>
                    <div class="Rectangle72 w-14 h-1 left-0 top-0 absolute bg-white rounded-sm"></div>
                </div>
                <ul class="info">
                    <li>
                        <div class="flex gap-2">
                            <span><i class="fa-solid fa-location-dot text-white"></i></span>
                            <p><a href="#" class="text-white">Okarbot Marga, Kathmandu-10, New Baneshwor</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="flex gap-2">
                            <span><i class="far fa-envelope text-white"></i></span>
                            <p><a href="#" class="text-white">Info@serviceey.com.np</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="flex gap-2 ">
                            <span><i class="fa-solid fa-phone text-white"></i></span>
                            <p><a href="#" class="text-white">01-4105036</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="flex gap-4 mt-3 ">
                            @foreach($urls as $url)
                            @php
                            $iconClass = 'fa-solid fa-link'; // Default icon class
                            if (strpos($url->url, 'facebook.com') !== false) {
                            $iconClass = 'fa-brands fa-facebook-f';
                            }
                            elseif (strpos($url->url, 'linkedin.com') !== false) {
                            $iconClass = 'fa-brands fa-linkedin';
                            }
                            elseif (strpos($url->url, 'youtube.com') !== false) {
                            $iconClass = 'fa-brands fa-youtube';
                            }
                            elseif (strpos($url->url, 'twitter.com') !== false) {
                            $iconClass = 'fa-brands fa-twitter';
                            } elseif (strpos($url->url, 'instagram.com') !== false) {
                            $iconClass = 'fa-brands fa-instagram';
                            } elseif (strpos($url->url, 'twitch.com') !== false) {
                            $iconClass = 'fa-brands fa-threads'; // Update as needed
                            } elseif (strpos($url->url, 'gitlab.com') !== false) {
                            $iconClass = 'fa-brands fa-gitlab';
                            } elseif (strpos($url->url, 'pinterest.com') !== false) {
                            $iconClass = 'fa-brands fa-pinterest';
                            } elseif (strpos($url->url, 'tumblr.com') !== false) {
                            $iconClass = 'fa-brands fa-tumblr';
                            } elseif (strpos($url->url, 'reddit.com') !== false) {
                            $iconClass = 'fa-brands fa-reddit';
                            } elseif (strpos($url->url, 'github.com') !== false) {
                            $iconClass = 'fa-brands fa-github';
                            }
                            @endphp
                            <a href="{{ $url->url }}" target="_blank" class="text-blue-500 transition-opacity duration-300 hover:opacity-75">
                                <i class="{{ $iconClass }} text-white"></i>
                            </a>
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
            <!-- ... (similar modifications for other sections) -->
        </div>
    </footer>
    <div class="w-full p-4 bg-black text-white text-center">
        <div class="flex flex-wrap items-center justify-center mx-4 md:mx-10">
            <p id="copy" class="mb-4 md:mb-0">Copyright &copy; 2023 Service Eye. All Rights Reserved</p>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var listItems = document.getElementById("myList1").getElementsByTagName("li");
            for (var i = 0; i < listItems.length; i++) {
                var listItem = listItems[i];
                var link = listItem.querySelector("a");
                // Check if the link exists
                if (link) {
                    // Add ">> " before the link's text content
                    link.textContent = ">>" + " " + link.textContent;
                }
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var listItems = document.getElementById("myList2").getElementsByTagName("li");
            for (var i = 0; i < listItems.length; i++) {
                var listItem = listItems[i];
                var link = listItem.querySelector("a");
                // Check if the link exists
                if (link) {
                    // Add ">> " before the link's text content
                    link.textContent = ">>" + " " + link.textContent;
                }
            }
        });
    </script>
</body>
</html>