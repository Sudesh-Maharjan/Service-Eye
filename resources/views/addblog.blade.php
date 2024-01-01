@extends("layouts.AdminLayout")
@section("title")
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Blog Post</title>
@vite('resources/css/app.css')
<!-- Include Tailwind CSS -->
<script src="https://cdn.ckeditor.com/4.17.0/standard/ckeditor.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
<script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>

@endsection
@section("content")

<body class="bg-gray-100 h-screen flex flex-col items-center justify-center">
    <div class="ml-72">
        <h1 class="text-4xl font-bold text-start my-3">Blogs</h1>

        <div class="bg-white p-8 rounded shadow-md w-[750px]">
            <div class="flex flex-col">
                <a href="{{redirect()->back()}}" class="flex">
                    <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
                </a>
            </div>
            <h2 class="text-2xl font-semibold my-4">{{$title}}</h2>

            <form action="{{$url}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(Session::has('message'))
                <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                    {{Session::get('message')}}
                </div>
                @endif

                <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                <input type="text" id="title" name="title" value="{{$blogs->title}}" required class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

                <label for="description" class="block text-sm font-medium text-gray-600 mt-4">Description</label>
                <div id="editor-container" class="mt-1 border rounded focus:outline-none focus:border-blue-500"></div>
                <textarea id="description" value="{{$blogs->description}}" name="description" style="display: none; height: 200px;"></textarea>


                <label for="image" class="block text-sm font-medium text-gray-600 mt-4">Image (Optional)</label>
                <input type="file" id="image" name="image" accept="image/*" class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

                <button type="submit" class="mt-10 deleterelative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200">
                    <span class=" relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">Submit</span>
                </button>
            </form>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                CKEDITOR.replace('description', {
                    allowedContent: true,
                });
                CKEDITOR.instances['description'].setData(`{!! $blogs->description !!}`);
            })
        </script>
    </div>
</body>

@endsection