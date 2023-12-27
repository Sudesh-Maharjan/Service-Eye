<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    @vite('resources/css/app.css')
</head>
@include('admin.layout.sidebar')
<body class="bg-gray-100">
   <div class='flex flex-col items-end justify-center mr-16'>
      <div class="">
      <h1 class="text-4xl font-bold text-start my-3 mx-4">Our Clients</h1>
      <div class="flex items-center justify-center">
            <div class="relative sm:rounded-lg">
                @if(Session::has('message'))
                <div class=" text-red-500 text-base font-bold ">
                    {{Session::get('message')}}
                </div>
                @endif
                <a href="{{route('client.create')}}" class="addbutton">Add Client</a>
                <div class="overflow-x-auto shadow-md sm:rounded-lg m-5">
                    <table class=" w-[1100px] text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                            <th scope="col" class="py-3 px-6">Sn</th>
                                <th scope="col" class="py-3 px-6">Url</th>
                                <th scope="col" class="py-3 px-6">Image</th>
                                <th scope="col" class="py-3 px-6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6">{{ $loop->iteration }}</td>
                                <td class="py-4 px-6">{{$client->url}}</td>
                                <td class="py-4 px-6">
                                <img src="{{ asset('uploads/' . $client->image) }}" alt="Team Image" style="max-width: 100px;">
                                </td>
                                <td class="py-4 px-6">
                                <a href="{{route('clients.edit',$client->id)}}"><button class="deleterelative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update</span></button></a>

                                <a href="{{route('clients.destroy',$client->id)}}"><button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0" onclick="return confirm('Are you sure you want to delete this team?');">Delete</span></button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>