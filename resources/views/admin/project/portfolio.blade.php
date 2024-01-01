@extends("layouts.AdminLayout")
@section("title")
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
    @endsection
    @section("content")
<body class="flex flex-wrap justify-between mx-20 bg-gray-100">
    
<div class="w-2/12">

</div>
<div class="w-10/12 flex">
    <div class="container mx-auto p-4 flex flex-col justify-end">

        <h1 class="text-4xl font-bold mx-5">Portfolio</h1>
        <!-- <h2 class="text-xl font-bold mb-4">Add Project</h2> -->
        <div class="">

            <button type="button" class="addbutton"onclick="openAddProjectPopup()">Add Project</button>
        </div>
        <div id="addProjectPopup" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 hidden">
            <div class="flex justify-center items-center h-full">
                <div class="bg-white p-8 rounded-md w-96">
                    <form action="{{ route('addproject') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="name" class="block mb-2">Name:</label>
                        <input type="text" name="name" class="w-full border p-2 mb-4" required>
                        <label for="image" class="block mb-2">Image:</label>
                        <input type="file" name="image" class="w-full border p-2 mb-4" required>
                        <label for="url" class="block mb-2">URL:</label>
                        <input type="text" name="url" class="w-full border p-2 mb-4" required>
                        <label for="project_cat_id" class="block mb-2">Category:</label>
                        <select name="project_cat_id" class="w-full border p-2 mb-4" required>
                            <option value="" disabled selected>Select a category</option>
                            @foreach ($projectCats as $projectCat)
                            <option value="{{ $projectCat->id }}">{{ $projectCat->project_cat }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
                        <button type="button" class="bg-gray-300 text-gray-800 px-4 py-2 rounded ml-2" onclick="closeAddProjectPopup()">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="">
            @if(session('success'))
            <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
            @endif
            @if(Session::has('message'))
            <div class=" bg-red-200 text-red-800 p-3 mb-4 rounded ">
                {{Session::get('message')}}
            </div>
            @endif
            @if(count($projects) > 0)
            <table class="w-[1200px] text-center bg-white border border-gray-300 rounded-md mt-4">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">SN</th>
                        <th class="py-2 px-4 border-b">Project Name</th>
                        <th class="py-2 px-4 border-b">URL</th>
                        <th class="py-2 px-4 border-b">Image</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <td class="py-4 px-6 ">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border-b">{{ $project->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $project->url }}</td>
                        <td>
                            @if($project->image)
                            <img src="{{ asset('uploads/' . $project->image) }}" alt="Project Image" style="max-width: 100px;">
                            @else
                            No Image
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('editaProject', $project->id) }}">
                                <button type="submit" class=" relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200"><span
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">Update</button>
                            </a>
                            <a href="{{ route('deleteproject', $project->id) }}">
                                <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-200"><span
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0" onclick="return confirm('Are you sure you want to delete this team?');">Delete</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p class="text-gray-600 mt-4">No project categories available.</p>
        @endif
    </div>
</div>
</body>

<script>
    function openAddProjectPopup() {
        document.getElementById('addProjectPopup').style.display = 'block';
    }
    function closeAddProjectPopup() {
        document.getElementById('addProjectPopup').style.display = 'none';
    }
</script>
@endsection