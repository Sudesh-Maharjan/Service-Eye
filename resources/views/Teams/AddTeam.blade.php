@extends("layouts.AdminLayout")
@section("title")
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Team</title>
<script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>

@vite('resources/css/app.css')

@endsection
@section("content")

<div class="container">
    <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data" class="w-[1100px] mx-auto ml-80">
        @csrf
        <h1 class="font-bold text-4xl mx-4">Team</h1>
        <div class="shadow-md p-5 m-5 flex flex-col">
            <div class="">
                <!-- Add other fields as needed -->
                <div class="flex flex-col">
                    <a href="{{redirect()->back()}}" class="flex">
                        <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
                    </a>
                </div>
                <h1 class="font-bold text-2xl my-4">Add Team</h1>
                <div class="flex row gap-10 justify-center">
                    <div class="w-[400px]">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 mt-5">Name</label>
                        <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>

                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900">Position:</label>
                        <input type="text" name="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>

                        <label for="qoute" class="block mb-2 text-sm font-medium text-gray-900">Quote:</label>
                        <textarea name="qoute" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>

                        <label for="urls" class="block mb-2 text-sm text-center font-medium text-gray-900">URLs</label>
                        <div id="urls-container">
                            <!-- Initially hide the URL input -->
                            <div class="url-input flex">
                                <input type="text" name="urls[]" placeholder="https://url1.com" class="bg-gray-50 flex  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-[300px]">
                                <button type="button" class="mx-4 mt-1 remove-url relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-200"><span class="relative flex px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0 ">-</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="w-[400px]">
                        <label for="job_description" class="block mb-2 text-sm font-medium text-gray-900">Job Description:</label>
                        <textarea name="job_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>

                        <label for="interest" class="block mb-2 text-sm font-medium text-gray-900">Interest</label>
                        <textarea name="interest" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>

                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                        <input type="file" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" accept="image/*">

                    </div>
                </div>
            </div>
            <div class=" flex justify-center">
                <button type="button" id="add-url" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">Add URL</button>

                <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">Submit</button>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlsContainer = document.getElementById('urls-container');
        const addUrlButton = document.getElementById('add-url');

        addUrlButton.addEventListener('click', function() {
            const urlInputContainer = document.createElement('div');
            urlInputContainer.classList.add('url-input');

            const urlInput = document.createElement('input');
            urlInput.type = 'text';
            urlInput.name = 'urls[]';
            urlInput.placeholder = 'https://new-url.com';
            urlInput.classList.add('bg-gray-50', 'border', 'border-gray-300', 'text-gray-900', 'text-sm', 'rounded-lg', 'focus:ring-blue-500', 'focus:border-blue-500', 'p-2.5', 'dark:bg-gray-700', 'dark:border-gray-600', 'dark:placeholder-gray-400', 'dark:text-white', 'dark:focus:ring-blue-500', 'dark:focus:border-blue-500', 'w-[300px]');

            const removeUrlButton = document.createElement('button');
            removeUrlButton.type = 'button';
            removeUrlButton.classList.add('remove-url', 'relative', 'inline-flex', 'items-center', 'justify-center', 'p-0.5', 'mb-2', 'me-2', 'overflow-hidden', 'text-sm', 'font-medium', 'text-gray-900', 'rounded-lg', 'group', 'bg-gradient-to-br', 'from-pink-500', 'to-orange-400', 'group-hover:from-pink-500', 'group-hover:to-orange-400', 'hover:text-white', 'dark:text-white', 'focus:ring-4', 'focus:outline-none', 'focus:ring-pink-200', 'dark:focus:ring-pink-800');
            removeUrlButton.innerHTML = '<span class="relative flex px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0 ">-</span>';
            removeUrlButton.addEventListener('click', function() {
                urlsContainer.removeChild(urlInputContainer);
            });

            urlInputContainer.appendChild(urlInput);
            urlInputContainer.appendChild(removeUrlButton);
            urlsContainer.appendChild(urlInputContainer);

            // Show the URL input container
            urlInputContainer.style.display = 'block';
        });
    });
</script>
@endsection