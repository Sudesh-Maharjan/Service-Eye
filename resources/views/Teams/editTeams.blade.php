<!-- resources/views/Teams/editTeam.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
@vite('resources/css/app.css')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Team</title>
    <script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>
</head>
<body>
@include('admin.layout.sidebar')

<h1 class="text-center text-4xl font-bold m-5">Team</h1>

<form action="{{ route('teams.update', ['id' => $team->id]) }}" id="edit-team-form" class="flex flex-col justify-center items-center gap-16  rounded-lg" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Add other fields as needed -->
    <h1 class="text-2xl font-bold text-start">Edit Team</h1>
    <div class="flex shadow-lg rounded-lg p-5 w-auto gap-20 justify-center ml-52">
        <div class="flex flex-col">
        <a href="{{redirect()->back()}}" class="flex">
        
            <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
        </a>
        </div>
      <div class="flex flex-col justify-center">
        <div class="input-group">
            <label for="name" class="font-bold text-xl text-start">Name</label><br>
            <input type="text" name="name" value="{{ $team->name }}" class="p-2 w-auto rounded-md border-black border-2" required>
        </div>
        <div class="input-group">
            <label for="position" class="font-bold text-xl">Position</label><br>
            <input type="text" name="position" value="{{ $team->position }}" class="p-2 w-auto rounded-md border-black border-2" required>
        </div>
        <div class="input-group">
            <label for="qoute" class="font-bold text-xl">Quote</label><br>
            <textarea name="qoute" class="p-2 w-auto rounded-md border-black border-2 h-32" required>{{ $team->qoute }}</textarea>
        </div>
        <div class="input-group">
            <label for="job_description" class="font-bold text-xl">Job Description</label><br>
            <textarea name="job_description" class="p-2 w-auto rounded-md border-black border-2 h-32" required>{{ $team->job_description }}</textarea>
        </div>
       
        </div>
        <div class="flex flex-col">
        <div class="input-group">
            <label for="interest" class="font-bold text-xl ">Interest</label><br>
            <textarea name="interest" class="p-2 w-auto rounded-md border-black border-2" required>{{ $team->interest }}</textarea>
        </div>
        <div class="input-group">
            <label for="urls" class="font-bold text-xl ">URLs</label><br>
            <div id="urls-container">
                @foreach(json_decode($team->urls) ?? [] as $url)
                    <div class="url-input">
                        <input type="text" name="urls[]" value="{{ $url }}" class="p-2 w-auto rounded-md border-black border-2" placeholder="https://url1.com">
                        <button type="button" class="remove-url">-</button>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="">
        <button type="button" id="add-url" class="h-10 font-bold text-xl mt-2 bg-blue-500 text-white p-2 rounded-md">Add URL</button></div>
        <div class="input-group">
            <label for="image" class="font-bold text-xl text-start">Image</label><br>
            <input type="file" name="image" accept="image/*" class="p-2 w-auto rounded-md">
        </div>
        <div class="input-group">
            <label for="is_visible" class="font-bold text-xl">Is Visible</label><br>
            <select name="is_visible" class="p-2 w-auto rounded-md border-black border-2">
                <option value="1" {{ $team->is_visible ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$team->is_visible ? 'selected' : '' }}>No</option>
            </select>
        </div>
    </div>
</div> 
<div class="flex">
<button type="submit" class=" relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update</button>
<a href="{{redirect()->back()}}">
<button type="button" id="cancel-button" onclick="history.back()" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"><span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Cancel</button>
</a>
</div>
</form>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlsContainer = document.getElementById('urls-container');
        const addUrlButton = document.getElementById('add-url');

        if (!urlsContainer || !addUrlButton) {
            console.error('Required elements not found.');
            return;
        }

        addUrlButton.addEventListener('click', function() {
            const urlInputContainer = document.createElement('div');
            urlInputContainer.classList.add('url-input');

            const urlInput = document.createElement('input');
            urlInput.type = 'text';
            urlInput.name = 'urls[]';
            urlInput.placeholder = 'https://new-url.com';

            const removeUrlButton = document.createElement('button');
            removeUrlButton.type = 'button';
            removeUrlButton.classList.add('remove-url');
            removeUrlButton.textContent = '-';

            removeUrlButton.addEventListener('click', function() {
                urlsContainer.removeChild(urlInputContainer);
            });

            urlInputContainer.appendChild(urlInput);
            urlInputContainer.appendChild(removeUrlButton);
            urlsContainer.appendChild(urlInputContainer);
        });

        const cancelBtn = document.getElementById('cancel-button');

        if (cancelBtn) {
            cancelBtn.addEventListener('click', function() {
                // Find the form element and remove it
                const form = cancelBtn.closest('form');
                if (form) {
                    form.parentNode.removeChild(form);
                } else {
                    console.error('Form element not found.');
                }
            });
        }
    });
</script>

</body>
</html>
