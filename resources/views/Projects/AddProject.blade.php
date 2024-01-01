@extends("layouts.AdminLayout")
@section("title")
@vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
<script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>


@endsection
@section("content")

<body class="bg-gray-100">
        <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data" class="flex flex-col items-center p-5">
            @csrf
            <div class="">
            <h1 class="text-start text-4xl font-bold mt-4 mx-8">Project</h1>
        <div class="flex flex-col shadow-lg rounded-lg p-4 m-5 bg-white w-[700px]">
   <h1 class="text-start text-2xl font-bold mb-3">Add Project</h1>

            <div class="flex flex-col">
                    <a href="{{redirect()->back()}}" class="flex">
                        <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
                    </a>
                    </div>
        @if(Session::has('message'))
            <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                {{Session::get('message')}}
            </div>
            @endif
        <!-- Add other fields as needed -->
        <label for="name" class="font-bold mt-2 ml-2">Name</label>
        <input type="text" class="p-2 m-2  border-2 rounded-md" name="name" required>

        <label for="url" class="font-bold mt-2 ml-2">Url</label>
        <input type="text" class="p-2 m-2  border-2 rounded-md" name="url" required>


        <label for="image" >Image:</label>
        <input type="file" name="image" class="p-2 m-2 border-2 rounded-md" accept="image/*">

     
        <div class="flex justify-center">

        <button type="submit"  class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">Submit</span></button>
        </div>
</div>
</div>
    </form>



</body>
@endsection
