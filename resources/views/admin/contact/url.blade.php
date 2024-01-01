@extends("layouts.AdminLayout")
@section("title")
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add URL</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>
    @endsection
   @section("content")
<body class="font-sans bg-gray-100">

    <div class="">
        <div class="flex flex-wrap justify-center items-center max-w-xl mx-auto p-4 mt-28">
            <h1 class="text-4xl text-start font-bold">Add URL</h1>
            <div class="flex flex-col shadow-lg rounded-lg p-6 m-5 w-[1000px] bg-white">
                @if(Session::has('message'))
                <div class="bg-red-200 text-red-800 p-3 mb-4 rounded">
                    {{ Session::get('message') }}
                </div>
                @endif
                @if(session('success'))
                <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
                    {{ session('success') }}
                </div>
                @endif
                <form action="{{ route('storeurl') }}" method="POST" class="mb-4">
                    @csrf
                    <label for="name" class="block text-sm font-medium text-gray-700">Social Media:</label>
                    <input type="text" name="name" required class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 block w-full">
                    <label for="url" class="block text-sm font-medium text-gray-700">URL:</label>
                    <input type="text" name="url" required class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 block w-full">
                    <button type="submit" class="addbtn mt-4">
                        Add URL
                    </button>
                </form>
                @if(count($urls) > 0)
                <table class="min-w-full bg-white border border-gray-300 rounded-md">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Social media name</th>
                            <th class="py-2 px-4 border-b">URL</th>
                            <th class="py-2 px-4 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($urls as $url)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $url->name }}</td>
                            <td class="py-2 px-4 border-b">{{ $url->url }}</td>
                            <td class="py-2 px-4 border-b">
                                <form action="{{ route('deleteurl', $url->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this URL?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <p class="text-gray-600">No URLs.</p>
                @endif
            </div>
        </div>
    </div>
    <!-- Include your footer component -->
</body>
@endsection