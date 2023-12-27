<!doctype html>
<html lang="en">
  <head>
  @vite('resources/css/app.css')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services</title>

    <style>
        .tdclass {
            max-width: 200px; /* Set a maximum width for the description cell */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .container {
            display: flex;
        }

        .content {
            margin-left: 300px; /* Adjust the width based on your sidebar width */
            flex: 1;
        }
    </style>
  </head>
  
  @if(Session::has('message'))
  <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
    {{Session::get('message')}}
  </div>
  @endif
  <body class="flex h-screen flex-col items-end bg-gray-100 dark:bg-gray-900">
  @include('admin.layout.sidebar')
  <div class="container">
    <div class="content">
          <h1 class="text-4xl text-left font-bold my-3 mx-4">Services</h1>
  <a href="{{route('addservices')}}" class="addbutton "> Add Services</a>
  <table class=" min-w-full leading-normal mt-8">  
  <thead class=" ">                  
    <th scope="col" class="thclass">Title</th>      
    <th scope="col" class="thclass">Icon</th>
    <th scope="col" class="thclass">Description</th>
    <th scope="col" class="thclass">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($services as $blog)
    <tr>
        <td class="tdclass">{{$blog->title}}</td>
        <td class="tdclass"><img src="{{asset('uploads')}}/{{$blog->icon}}"  height="100px"></td>
        <td class="tdclass">{!!$blog->description!!}</td>
        <td class="tdclass">
            <a href="{{route('adminservicesedit',$blog->id)}}"><button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update</span></button></a>

            <a href="{{route('adminservicesdelete',$blog->id)}}"><button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0" onclick="return confirm('Are you sure you want to delete this team?');">Delete</span></button></a>
        </td>

    </tr>
    @endforeach
    </tbody>
  </table>
 
    </div>
    </div>
  </body>
</html>