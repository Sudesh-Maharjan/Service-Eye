<div class="flex flex-auto justify-center mt-4 mb-9">
    @php
    $urlArray = json_decode($url);
    @endphp
    <div class="group relative">

        <div class="Rectangle91 w-56 h-96 bg-neutral-100 rounded-3xl shadow overflow-hidden transform transition-transform duration-300 group-hover:rotate-y-180">
            <div class="Rectangle89 w-56 h-24 bg-gradient-to-t from-gray-300 to-blue-500 rounded-tl-3xl rounded-tr-3xl">
            </div>
            <div class="flex flex-col items-center justify-center">
                <img class="w-32 h-32 -mt-16 rounded-full border-8 border-white" src="{{$timg}}" alt="Profile Image" />
                <div class="mt-4 text-themecolor text-opacity-95 text-xs font-normal font-['Inter'] ">{{$name}}
                </div>
                <div class="FrontEndDeveloper text-black text-opacity-60 text-xs font-normal font-['Inter'] mb-10">{{$position}}</div>
                <div class="w-44 text-black items-center text-xs font-normal font-['Inter']">
                    "{{$qoute}}"
                </div>
            </div>
        </div>

        <div class="absolute top-0 left-0 w-full h-full bg-neutral-100 rounded-3xl shadow opacity-0 transform rotate-y-180 transition-opacity duration-300 group-hover:opacity-100">

            <div class="flex flex-col items-center justify-center h-full">

                <div class="text-center">
                    <div class=" text-black text-xs font-bold text-opacity-95 mb-2  ">Job Description</div>
                    <div class=" w-44 text-black text-xs font-normal mb-1">
                        "{{$jobdes}}" </div>
                </div>
                <hr class="h-px my-1 w-5/6 bg-zinc-300 border-0">
                <div class="text-center mt-2">
                    <div class="text-black text-xs font-bold text-opacity-95 mb-2 ">Interest</div>
                    <div class=" w-44 text-black text-xs font-normal mb-1">
                        "{{$interest}}"</div>
                </div>
                <hr class="h-px my-1 w-5/6 bg-zinc-300 border-0">
                <br>
                <div class="">
                    <div class="text-themecolor text-opacity-95 text-xs font-normal text-center ">Social Media</div>
                    <div class="flex flex-wrap items-center space-x-2 mt-2 p-4 ">
                        @foreach ($urlArray as $url)
                        @php
                        $iconClass = 'fa-solid fa-link fa-xl'; // Default icon

                        if (strpos($url, 'facebook.com') !== false) {
                        $iconClass = 'fa-brands fa-facebook fa-xl';
                        }
                        elseif (strpos($url, 'linkedin.com') !== false) {
                        $iconClass = 'fa-brands fa-linkedin fa-xl';
                        }
                        elseif (strpos($url, 'twitter.com') !== false) {
                        $iconClass = 'fa-brands fa-twitter fa-xl';
                        }
                        elseif (strpos($url, 'instagram.com') !== false) {
                        $iconClass = 'fa-brands fa-instagram fa-xl';
                        }
                        elseif (strpos($url, 'threads.com') !== false) {
                        $iconClass = 'fa-brands fa-threads fa-xl';
                        }
                        elseif (strpos($url, 'gitlab.com') !== false) {
                        $iconClass = 'fa-brands fa-gitlab fa-xl';
                        }
                        elseif (strpos($url, 'pinterest.com') !== false) {
                        $iconClass = 'fa-brands fa-pinterest fa-xl';
                        }
                        elseif (strpos($url, 'tumblr.com') !== false) {
                        $iconClass = 'fa-brands fa-tumblr fa-xl';
                        }
                        elseif (strpos($url, 'reddit.com') !== false) {
                        $iconClass = 'fa-brands fa-reddit fa-xl';
                        }
                        elseif (strpos($url, 'github.com') !== false) {
                        $iconClass = 'fa-brands fa-github fa-xl';
                        }
                        elseif (strpos($url, 'youtube.com') !== false) {
                        $iconClass = 'fa-brands fa-youtube fa-xl';
                        }
                        @endphp


                        <a href="{{ $url }}" target="_blank" class="text-blue-500 ">
                            <i class="{{ $iconClass }}"></i>

                        </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>