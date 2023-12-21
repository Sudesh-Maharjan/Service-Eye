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

<form action="{{ route('teams.update', ['id' => $team->id]) }}" class=" h-96  my-20 flex flex-col items-center justify-center" method="post" enctype="multipart/form-data">
    @csrf
    <div class="w-[500px] flex flex-col justify-center items-center rounded-lg shadow-lg p-8 bg-gray-100 dark:bg-gray-800">
        <!-- Add other fields as needed -->
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
        <button type="button" id="add-url" class="font-bold text-xl mt-4 bg-blue-500 text-white p-2 rounded-md">Add URL</button>
        <div class="input-group">
            <label for="image" class="font-bold text-xl text-start">Image:</label><br>
            <input type="file" name="image" accept="image/*" class="p-2 w-96 rounded-md">
        </div>
        <div class="input-group">
            <label for="is_visible" class="font-bold text-xl">Is Visible:</label><br>
            <select name="is_visible" class="p-2 w-96 rounded-md">
                <option value="1" {{ $team->is_visible ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$team->is_visible ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="mt-6 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update</button>
    </div>
</form>


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
    });
</script>

</body>
</html>
