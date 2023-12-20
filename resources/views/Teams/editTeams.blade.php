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

<form action="{{ route('teams.update', ['id' => $team->id]) }}" method="post" enctype="multipart/form-data">
    @csrf

    <!-- Add other fields as needed -->
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $team->name }}" required>

    <label for="position">Position:</label>
    <input type="text" name="position" value="{{ $team->position }}" required>

    <label for="qoute">Quote:</label>
    <textarea name="qoute" required>{{ $team->qoute }}</textarea>

    <label for="job_description">Job Description:</label>
    <textarea name="job_description" required>{{ $team->job_description }}</textarea>

    <label for="interest">Interest:</label>
    <textarea name="interest" required>{{ $team->interest }}</textarea>

    <label for="urls">URLs:</label>
    <div id="urls-container">
        @foreach(json_decode($team->urls) ?? [] as $url)
            <div class="url-input">
                <input type="text" name="urls[]" value="{{ $url }}" placeholder="https://url1.com">
                <button type="button" class="remove-url">-</button>
            </div>
        @endforeach
    </div>
    <button type="button" id="add-url">Add URL</button>

    <label for="image">Image:</label>
    <input type="file" name="image" accept="image/*">

    <label for="is_visible">Is Visible:</label>
    <select name="is_visible">
        <option value="1" {{ $team->is_visible ? 'selected' : '' }}>Yes</option>
        <option value="0" {{ !$team->is_visible ? 'selected' : '' }}>No</option>
    </select>

    <button type="submit">Update</button>
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
