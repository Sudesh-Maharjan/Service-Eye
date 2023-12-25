@extends('layouts.AdminServices')
@section("title")
@vite('resources/css/app.css')

<title>Admin add Services</title>
<script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>

@endsection

@section('content')
@include('admin.layout.sidebar')

<body class="bg-gray-100 flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md max-w-xl w-full mt-10 ml-40">
    <div class="flex flex-col mb-3">
                <a href="{{redirect()->back()}}" class="flex">
                    <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
                </a>
                </div>
        <h2 class="text-2xl font-semibold mb-4 my-4">{{$title}}</h2>

        <form action="{{$url}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(Session::has('message'))
            <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                {{Session::get('message')}}
            </div>
            @endif

            <label for="title" class="block text-sm font-medium text-gray-600 ">Title</label>
            <input type="text" id="title" name="title" value="{{$services->title}}" required
                class="border-2 rounded-md mt-1 p-2 w-full focus:outline-none focus:border-blue-500">

                <label for="description" class="block text-sm font-medium text-gray-600 mt-4">Description</label>
            <textarea id="description" value="{{$services->description}}" name="description" style="height: 300px; width:500px" class="border-2 rounded-md"> {{$services->description}}</textarea>

            <label for="icon" class="block text-sm font-medium text-gray-600 mt-4">Icon (Optional)</label>
            <input type="file" id="icon" name="icon" accept="image/*"
                class="mb-4 mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

            <button type="submit"
                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0" >Submit</span>
                
            </button>
        </form>
    </div>

     <!-- Include CKEditor script -->



</body>
@endsection