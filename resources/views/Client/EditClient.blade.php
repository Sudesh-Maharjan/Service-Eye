<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Client</title>
    <script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>
@vite('resources/css/app.css')

</head>
<body>
@include('admin.layout.sidebar')
    <form action="{{ route('clients.update', $client->id) }}" method="post" enctype="multipart/form-data" class="flex flex-col justify-center items-center">
        <div class="mt-20">
        <h1 class="font-bold text-4xl mx-5">Our Clients</h1>
        <div class="flex flex-col justify-center items-start p-5 m-5 gap-2 shadow-md rounded-md">
        @csrf
        <div class="flex flex-col">
        <a href="{{redirect()->back()}}" class="flex">
            <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
        </a>
        </div>
        <h1 class="font-bold text-2xl ">Update Clients</h1>

        <label for="url" class="font-bold">Url</label>
        <input type="text" name="url" value="{{  $client->url }}" class="p-3  rounded-md border-2" required>
        <label for="image" class=" rounded-md font-bold">Image</label>
        <input type="file" name="image" accept="image/*" class=" rounded-md my-2">
        <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update</span></button>
        </div>
        </div>
    </form>
</body>
</html>