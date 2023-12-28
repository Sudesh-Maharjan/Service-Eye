<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Courses</title>
    @vite('resources/css/app.css')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="flex flex-wrap justify-between mx-20 bg-gray-100">
    <div class="w-2/12">
        @include('admin.layout.sidebar')
    </div>
    <div class="w-10/12 flex">
        <div class="container mx-auto p-4 flex flex-col justify-end">
            <h1 class="text-2xl font-bold mb-4">All Courses</h1>
            @if(Session::has('message'))
            <div class="text-red-500 text-base font-bold mb-4">
                {{ Session::get('message') }}
            </div>
            @endif
            <a href="{{ route('courses.create') }}">
                <button class="addbutton">
                    Add Course
                </button>
            </a>
            <div class="overflow-x-auto mt-4">
                <table class="min-w-full text-center bg-white border border-gray-300 rounded-md mt-4">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">SN</th>
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Image</th>
                            <th class="py-2 px-4 border-b">Description</th>
                            <th class="py-2 px-4 border-b">Programs</th>
                            <th class="py-2 px-4 border-b">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                        <tr>
                            <td class="border p-2">{{ $loop-> iteration }}</td>
                            <td class="border p-2">{{ $course->name }}</td>
                            <td class="border p-2">
                                @if($course->image)
                                <img src="{{ asset('uploads/' . $course->image) }}"  alt="Course Image"
                                    class="max-w-20 h-20">
                                @else
                                No Image
                                @endif
                            </td>
                            <td class="border p-2">{{ $course->short_description }}</td>
                            <td class="border p-2">
                                <ul>
                                    @foreach($course->programs as $program)
                                    <li>{{ $program->title }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="border p-2">
                                <a href="{{ route('courses.edit', $course->id) }}"><button
                                        class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200"><span
                                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">Update</span></button></a>
                                <a href="{{ route('courses.delete', $course->id) }}"><button
                                        class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-200"><span
                                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0"
                                            onclick="return confirm('Are you sure you want to delete this team?');">Delete</span></button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>