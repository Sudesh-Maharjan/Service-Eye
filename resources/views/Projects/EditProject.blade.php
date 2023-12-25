<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>

</head>
<body class>
   @include('admin.layout.sidebar')
<div class="container">
    <form action="{{route('project.update',['id' => $team->id])}}" class="flex flex-col items-center p-5" method="post" enctype="multipart/form-data" onsubmit="closeEditModal()">
        @csrf
        <div class="">
            <h2 class="text-black text-start font-bold text-4xl m-5 ">Project</h2>
            <div class="flex flex-col shadow-lg rounded-lg p-4 m-5 text-xl ">
                <h2 class="text-black text-start font-bold text-2xl my-3">Update Project</h2>
                @if(Session::has('message'))
                <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                    {{Session::get('message')}}
                </div>
                @endif
                
                <div class="flex flex-col">
                <a href="{{redirect()->back()}}" class="flex">
                
                    <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
                </a>
                </div>
        <!-- Add other fields as needed -->
        <label for="name" class="font-bold m-2">Name</label>
        <input type="text" name="name" class="p-2 m-2  border-2 rounded-md" value="{{ $team->name }}" required>

        <label for="url" class="font-bold m-2">Url</label>
        <input type="text" name="url" class="p-2 m-2  border-2 rounded-md" value="{{ $team->url }}" required>


      

       

        <label for="image" class="font-bold m-2">Image</label>
        <input type="file" name="image" class="p-2 m-2 rounded-md"accept="image/*">

     
<div class="flex justify-center">
    <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Submit</button>
                               
</div>
        </div>
        </div>
    </form>
</div>



</body>
</html>
