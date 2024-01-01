@extends("layouts.AdminLayout")
@section("title")
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client</title>
    <script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>

   @vite('resources/css/app.css')

   @endsection
   @section("content")

<div class="container">
    <form action="{{route('client.store')}}" method="post" enctype="multipart/form-data" class="flex flex-col items-center">
        @csrf
        <div class="mt-20 w-[800px] ml-56">
            <h1 class="text-4xl font-bold m-5">Our Clients</h1>
            <div class="flex flex-col">
            <a href="{{redirect()->back()}}" class="flex">
                <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
            </a>
            </div>
        <!-- Add other fields as needed -->
        <div class="flex flex-col justify-center shadow-md m-5 p-5">
            <h1 class="text-2xl font-bold my-2">Add Client</h1>
  <div class="mb-5">

        <label for="url" class="block mb-2 text-sm font-medium text-gray-900">Url:</label>
        <input type="text" name="url"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>

        </div>

        <div class="mb-5">

        <label for="image"  class="block mb-2 text-sm font-medium text-gray-900">Image:</label>
        <input type="file" name="image"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" accept="image/*">
        </div>
<div class="">
        <button type="submit"class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200"><span
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">Submit</button>
        </div>
        </div>
        </div>
    </form>
</div>



@endsection
