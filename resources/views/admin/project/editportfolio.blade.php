<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Portfolio</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
<script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>

</head>
<body class="font-sans bg-gray-100">
@include('admin.layout.sidebar')
<div id="editProjectPopup" class="max-w-lg mx-auto p-4 bg-white rounded-md shadow-md mt-10">
    <h1 class="text-4xl font-bold">Portfolio</h1>
    <h2 class="text-2xl font-bold my-4">Update Portfolio</h2>
    <div class="flex flex-col mb-3">
                    <a href="{{redirect()->back()}}" class="flex">
                        <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
                    </a>
                    </div>
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
                <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update</span></button>
            </div>
        </form>
    </div>
</body>
</html>