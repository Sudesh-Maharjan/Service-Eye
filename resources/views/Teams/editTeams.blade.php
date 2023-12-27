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
<body class="bg-gray-100">
@include('admin.layout.sidebar')


<form action="{{ route('teams.update', ['id' => $team->id]) }}" id="edit-team-form" class="flex flex-col  rounded-lg " method="post" enctype="multipart/form-data">
    @csrf
    <!-- Add other fields as needed -->
    <div class="flex shadow-lg rounded-lg p-5 gap-20 justify-center ml-72 ">
        <div class="bg-white p-5 rounded-md shadow-md">
            <div class="flex flex-col">
            <a href="{{redirect()->back()}}" class="flex">
                <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
            </a>
            </div>
    <h1 class="text-4xl font-bold my-2 text-start">Team</h1>

        <h1 class="text-2xl font-bold my-2">Update Team</h1>

        <div class="flex flex-col items-center gap-10">
            <div class="flex flex-row gap-20">
      <div class="flex flex-col justify-center items-center">
        <div class="input-group">
            <label for="name" class="font-bold  text-start">Name</label><br>
            <input type="text" name="name" value="{{ $team->name }}" class="p-2 w-[350px] rounded-md border-2" required>
        </div>
        <div class="input-group">
            <label for="position" class="font-bold mt-3">Position</label><br>
            <input type="text" name="position" value="{{ $team->position }}" class="p-2  w-[350px] rounded-md  border-2" required>
        </div>
        <div class="input-group">
            <label for="qoute" class="font-bold  mt-3">Quote</label><br>
            <textarea name="qoute" class="p-2 w-[350px] rounded-md  border-2 h-32" required>{{ $team->qoute }}</textarea>
        </div>
        <div class="input-group">
            <label for="job_description" class="font-bold mt-3">Job Description</label><br>
            <textarea name="job_description" class="p-2 w-[350px] rounded-md  border-2 h-32" required>{{ $team->job_description }}</textarea>
        </div>
        </div> 
<div class="flex flex-col">
        <div class="input-group">
            <label for="interest" class="font-bold mt-3">Interest</label><br>
            <textarea name="interest" class="p-2 w-[350px] rounded-md  border-2" required>{{ $team->interest }}</textarea>
        </div>
        <div class="input-group">
            <label for="urls" class="font-bold  ">URLs</label><br>
            <div id="urls-container">
                @foreach(json_decode($team->urls) ?? [] as $url)
                    <div class="url-input">
                        <input type="text" name="urls[]" value="{{ $url }}" class="p-2 w-[350px] rounded-md border-2" placeholder="https://url1.com">
                        <button type="button" class="remove-urlrelative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">-</span></button>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="">
        <button type="button" id="add-url" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Add URL</button></div>
        <div class="input-group">
            <label for="image" class="font-bold text-xl text-start mt-3">Image</label><br>
            <input type="file" name="image" accept="image/*" class="p-2 w-auto rounded-md">
        </div>
        <div class="input-group">
            <label for="is_visible" class="font-bold text-xl mt-3">Is Visible</label><br>
            <select name="is_visible" class="p-2 w-[350px] rounded-md  border-2">
                <option value="1" {{ $team->is_visible ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$team->is_visible ? 'selected' : '' }}>No</option>
            </select>
    </div>
</div>

    </div>
<div class="flex items-center">
<button type="submit" class=" relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update</button>
<a href="{{redirect()->back()}}">
<button type="button" id="cancel-button" onclick="history.back()" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"><span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Cancel</button>
</a>
</div>
</div>
</div>
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
            urlInput.classList.add('p-2', 'w-[350px]', 'rounded-md', 'border-2');

            const removeUrlButton = document.createElement('button');
            removeUrlButton.type = 'button';
            removeUrlButton.classList.add(
                'remove-url',
                'inline-flex',
                'items-center',
                'justify-center',
                'p-3',
                'mb-2',
                'me-2',
                'overflow-hidden',
                'text-lg',
                'font-medium',
                'text-gray-900',
                'rounded-lg',
                'group',
                'bg-gradient-to-br',
                'from-pink-500',
                'to-orange-400',
                'group-hover:from-pink-500',
                'group-hover:to-orange-400',
                'hover:text-white',
                'dark:text-white',
                'focus:ring-4',
                'focus:outline-none',
                'focus:ring-pink-200',
                'dark:focus:ring-pink-800'
            );
            removeUrlButton.textContent = '-';

            removeUrlButton.addEventListener('click', function() {
                urlsContainer.removeChild(urlInputContainer);
            });

            urlInputContainer.appendChild(urlInput);
            urlInputContainer.appendChild(removeUrlButton);
            urlsContainer.appendChild(urlInputContainer);
        });

        urlsContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-url')) {
                event.target.closest('.url-input').remove();
            }
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
