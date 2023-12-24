<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Categories</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>
</head>
<body class="font-sans bg-gray-100">
    @include('admin.layout.sidebar')
    <div class=" flex flex-wrap justify-center items-center max-w-xl mx-auto p-4 shadow-lg rounded-lg mt-44">
        <div class="flex flex-col ">
         
            <h2 class="text-2xl font-semibold mb-4">Project Categories</h2>
            @if(Session::has('message'))
            <div class=" bg-red-200 text-red-800 p-3 mb-4 rounded ">
                {{Session::get('message')}}
            </div>
            @endif
            @if(session('success'))
            <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('project-cat.store') }}" method="POST" class="mb-4">
                @csrf
                <label for="project_cat" class="block text-sm font-medium text-gray-700">Project Category:</label>
                <input type="text" name="project_cat" required class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 block w-full">
                <button type="submit" class="addbtn mt-4">
                    Add Project Category
                </button>
            </form>
            @if(count($projectCats) > 0)
            <table class="min-w-full bg-white border border-gray-300 rounded-md">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Project Category</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projectCats as $projectCat)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $projectCat->project_cat }}</td>
                        <td class="py-2 px-4 border-b">
                            <form action="{{ route('project-cat.destroy', $projectCat->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete ">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p class="text-gray-600">No project categories available.</p>
            @endif
        </div>
    </div>
    <!-- Include your footer component -->
</body>
</html>