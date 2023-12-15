<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog Post</title>
    <!-- Include Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md max-w-md w-full">

        <h2 class="text-2xl font-semibold mb-4">{{$title}}</h2>

        <form action="{{$url}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(Session::has('message'))
            <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                {{Session::get('message')}}
            </div>
            @endif

            <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
            <input type="text" id="title" name="title" value="{{$blogs->title}}" required
                class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

                <label for="description" class="block text-sm font-medium text-gray-600 mt-4">Description</label>
<div id="editor-container" class="mt-1 border rounded focus:outline-none focus:border-blue-500"></div>
<textarea id="description" name="description" style="display: none;">{{$blogs->description}}</textarea>


            <label for="image" class="block text-sm font-medium text-gray-600 mt-4">Image (Optional)</label>
            <input type="file" id="image" name="image" accept="image/*"
                class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

            <button type="submit"
                class="mt-4 bg-blue-500 text-white p-2 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                Submit
            </button>
        </form>
    </div>
    <script>
    var quill = new Quill('#editor-container', {
        theme: 'snow',
        placeholder: 'Write something amazing...',
    });

    quill.on('text-change', function () {
        // Update the hidden textarea with Quill's HTML content
        document.getElementById('description').value = quill.root.innerHTML;
    });
</script>

</body>

</html>
