<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<div class="container">
    <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Add other fields as needed -->
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="position">Position:</label>
        <input type="text" name="position" required>

        <label for="qoute">Quote:</label>
        <textarea name="qoute" required></textarea>

        <label for="job_description">Job Description:</label>
        <textarea name="job_description" required></textarea>

        <label for="interest">Interest:</label>
        <textarea name="interest" required></textarea>

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*">

        <label for="urls">URLs:</label>
        <div id="urls-container">
            <!-- Initially hide the URL input -->
            <div class="url-input" style="display: none;">
                <input type="text" name="urls[]" placeholder="https://url1.com">
                <button type="button" class="remove-url">-</button>
            </div>
        </div>
        <button type="button" id="add-url">Add URL</button>

        <button type="submit">Submit</button>
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

            // Show the URL input container
            urlInputContainer.style.display = 'block';
        });
    });
</script>

</body>
</html>
