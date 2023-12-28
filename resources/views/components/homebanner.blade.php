<div class="h-1/2 flex items-center justify-center flex-col">
    <div class="max-w-90 flex items-center flex-col md:flex-row">
        <div class="text-content flex-1 p-20 h-[500px]">
            <h1 class="md:text-5xl xs:text-4xl font-bold mb-3">We Design Amazing</h1>
            <h2 class="md:text-4xl xs:text-3xl font-semibold">
                <span class="text-blue-950">Experience</span>
                For You.
            </h2>
            <h5 class="text-xl mt-3 font-bold">Find the Perfect IT Solutions</h5>
            <br>
            <button class="border border-black bg-blue-950 py-1 px-4 font-bold hover:bg-blue-800 text-white rounded-md w-[150px] p-3">Join Us</button>
            <br>
            <br>
            <div class="flex">
                <img src="{{ url('images/journey.png') }}" alt="">
                <button data-modal-target="youtube-modal" data-modal-toggle="youtube-modal" class="text-lg ml-4 text-bold" type="button">
                    Watch Our Journey
                </button>
            </div>
        </div>
        <img src="{{ url('images/GIF.gif') }}" alt="Banner Image" class="md:w-[400px] lg:w-[700px] h-auto">
    </div>
</div>
<!-- YouTube Video Modal -->
<div id="youtube-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 w-full max-w-2xl max-h-full bg-white rounded-lg shadow dark:bg-gray-700">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Watch Our Journey
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="youtube-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body with YouTube iframe -->
            <div class="p-4 md:p-5 space-y-4">
                <iframe id="youtubeVideo" class="w-full h-96" src="//www.youtube.com/embed/YE7VzlLtp-4" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle modal toggle
        const modalButtons = document.querySelectorAll('[data-modal-toggle]');
        const modalCloseButtons = document.querySelectorAll('[data-modal-hide]');
        modalButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-modal-target');
                const modal = document.getElementById(target);
                modal.classList.toggle('hidden');
            });
        });
        modalCloseButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-modal-hide');
                const modal = document.getElementById(target);
                modal.classList.add('hidden');
                // Pause the video on modal close
                const iframe = modal.querySelector('iframe');
                const videoSrc = iframe.src;
                iframe.src = videoSrc; // This triggers a reload and pauses the video
            });
        });
    });
</script>