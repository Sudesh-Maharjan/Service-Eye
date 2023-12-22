<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
    @vite('resources/css/app.css')

</head>
<body class>
   @include('admin.layout.sidebar')
<div class="container ">
    <h2>Edit Project</h2>
    <form action="{{route('project.update',['id' => $team->id])}}" class="flex flex-col items-center p-5 mt-20" method="post" enctype="multipart/form-data" onsubmit="closeEditModal()">
        @csrf
        <div class="flex flex-col shadow-lg rounded-lg p-4 m-5 text-xl ">
        @if(Session::has('message'))
            <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                {{Session::get('message')}}
            </div>
            @endif

        <!-- Add other fields as needed -->
        <label for="name" class="font-bold m-2">Name</label>
        <input type="text" name="name" class="p-2 m-2 border-black border-2 rounded-md" value="{{ $team->name }}" required>

        <label for="url" class="font-bold m-2">Url</label>
        <input type="text" name="url" class="p-2 m-2 border-black border-2 rounded-md" value="{{ $team->url }}" required>


      

       

        <label for="image" class="font-bold m-2">Image</label>
        <input type="file" name="image" class="p-2 m-2 rounded-md"accept="image/*">

     
<div class="flex justify-center">
    <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-2">Submit</button>
</div>
        </div>
    </form>
</div>



</body>
</html>
