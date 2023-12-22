<!-- resources/views/Teams/editTeam.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Team</title>
</head>
<body>

<h1>Edit Team</h1>

<form action="{{ route('teams.update', ['id' => $team->id]) }}" id="edit-team-form" class="flex flex-col justify-center items-center bg-slate-300 gap-16  rounded-lg ml-64 p-10 mt-5" method="post" enctype="multipart/form-data">
    @csrf
        <!-- Add other fields as needed -->
      <div class="flex">
      <div class="flex flex-col ml-60 ">
        <div class="input-group">
            <label for="name" class="font-bold text-xl text-start">Name:</label><br>
            <input type="text" name="name" value="{{ $team->name }}" class="p-2 w-96 rounded-md" required>
        </div>
        <div class="input-group">
            <label for="position" class="font-bold text-xl">Position:</label><br>
            <input type="text" name="position" value="{{ $team->position }}" class="p-2 w-96 rounded-md" required>
        </div>
        <div class="input-group">
            <label for="qoute" class="font-bold text-xl">Quote:</label><br>
            <textarea name="qoute" class="p-2 w-96 rounded-md" required>{{ $team->qoute }}</textarea>
        </div>
        <div class="input-group">
            <label for="job_description" class="font-bold text-xl">Job Description:</label><br>
            <textarea name="job_description" class="p-2 w-96 rounded-md" required>{{ $team->job_description }}</textarea>
        </div>
        <div class="input-group">
            <label for="interest" class="font-bold text-xl">Interest:</label><br>
            <textarea name="interest" class="p-2 w-96 rounded-md" required>{{ $team->interest }}</textarea>
        </div>
        </div>
        <div class="flex flex-col ml-10 ">
        <div class="input-group">
            <label for="urls" class="font-bold text-xl">URLs:</label><br>
            <div id="urls-container">
                @foreach(json_decode($team->urls) ?? [] as $url)
                    <div class="url-input">
                        <input type="text" name="urls[]" value="{{ $url }}" class="p-2 w-96 rounded-md" placeholder="https://url1.com">
                        <button type="button" class="remove-url">-</button>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="button" id="add-url" class="h-10 font-bold text-xl mt-2 bg-blue-500 text-white p-2 rounded-md w-28">Add URL</button>
        <div class="input-group">
            <label for="image" class="font-bold text-xl text-start">Image:</label>
            <input type="file" name="image" accept="image/*" class="p-2 w-96 rounded-md">
        </div>
        <div class="input-group">
            <label for="is_visible" class="font-bold text-xl">Is Visible:</label><br>
            <select name="is_visible" class="p-2 w-96 rounded-md">
                <option value="1" {{ $team->is_visible ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$team->is_visible ? 'selected' : '' }}>No</option>
            </select>
        </div>
    </div>
      </div> 
    <div class="flex">
    <button type="submit" class=" text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 m-2 text-center">Update</button>
    <button type="button" id="cancel-button" class=" text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center m-2">Cancel</button>
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
