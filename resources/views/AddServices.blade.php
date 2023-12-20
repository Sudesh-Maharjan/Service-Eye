@extends('layouts.AdminServices')
@section("title")
<title>Admin add Services</title>

@endsection

@section('content')
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
            <input type="text" id="title" name="title" value="{{$services->title}}" required
                class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

                <label for="description" class="block text-sm font-medium text-gray-600 mt-4">Description</label>
            <textarea id="description" value="{{$services->description}}" name="description" style="height: 400px; width:300px"> {{$services->description}}</textarea>

            <label for="icon" class="block text-sm font-medium text-gray-600 mt-4">Icon (Optional)</label>
            <input type="file" id="icon" name="icon" accept="image/*"
                class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

            <button type="submit"
                class="mt-4 bg-blue-500 text-white p-2 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                Submit
            </button>
        </form>
    </div>

     <!-- Include CKEditor script -->



</body>
@endsection