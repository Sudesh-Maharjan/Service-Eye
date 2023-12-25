<!doctype html>
<html lang="en">
  <head>
  @vite('resources/css/app.css')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  
    <style>
      .image{
        width: 200px !important;

      }
       .description {
    width: 500px !important;
  }

  .text-truncate {
    max-width: 500px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
   
    </style>
  </head>
  <body class="flex h-screen flex-col items-end bg-gray-100 dark:bg-gray-900">
  @include('admin.layout.sidebar')
    <a href="{{route('addblog')}}"><button class="addbutton">Add Blog</button></a>
    @if(Session::has('message'))
            <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                {{Session::get('message')}}
            </div>
            @endif
  <table class="table table-bordered">
  <thead class=" ">                  
    <tr>
    <th scope="col" class="thclass">Title</th>      
    <th scope="col" class="thclass">Image</th>
    <th scope="col" class="descriptio thclass">Description</th>
    <th scope="col" class="thclass">Action</th>

    </tr>
    </thead>
    <tbody>

    @foreach($blogs as $blog)
    <tr>
        <td class="tdclass">{{$blog->title}}</td>
        <td class="tdclass"><img src="{{asset('uploads')}}/{{$blog->image}}"  height="100px"></td>
        <td class="tdclass text-tru">{!!$blog->description!!}</td>
        <td>
            <a href="{{route('blog.edit',$blog->id)}}"><button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update</span></button></a>
            <a href="{{route('blog.delete',$blog->id)}}"><button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0" onclick="return confirm('Are you sure you want to delete this team?');">Delete</span></button></a>
        </td>
    </tr>
    @endforeach
  </table>
  </body>
</html>