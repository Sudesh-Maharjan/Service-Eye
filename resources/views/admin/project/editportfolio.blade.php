<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="font-sans bg-gray-100">
@include('admin.layout.sidebar')
    <div id="editProjectPopup" class="max-w-lg mx-auto p-4 bg-white mt-10 rounded-md shadow-md">
        <h2 class="text-2xl font-bold mb-4">Edit Project</h2>
        <form action="{{ route('updateproject', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Name:</label>
                <input type="text" value="{{ $project->name }}" name="name" class="w-full px-4 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-600">Image:</label>
                <input type="file" name="image" class="w-full px-4 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="url" class="block text-sm font-medium text-gray-600">URL:</label>
                <input type="text" value="{{ $project->url }}" name="url" class="w-full px-4 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="project_cat_id" class="block text-sm font-medium text-gray-600">Category:</label>
                <select name="project_cat_id" class="w-full px-4 py-2 border rounded-md">
                    <option value="" disabled>Select a category</option>
                    @foreach ($projectCats as $projectCat)
                    <option value="{{ $projectCat->id }}" {{ $project->project_cat_id == $projectCat->id ? 'selected' : '' }}>
                        {{ $projectCat->project_cat }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update</button>
            </div>
        </form>
    </div>
</body>
</html>