@extends("layouts.AdminLayout")
@section("title")
@vite('resources/css/app.css')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blogs</title>

@endsection
@section("content")
<body class="flex flex-col items-center justify-center bg-gray-100">
  <div class="flex flex-col">
    <div class="ml-72 ">
      <h1 class="text-4xl font-bold text-start m-5">Blogs</h1>
  <a href="{{route('addblog')}}" class="addbutton">Add Blog</a></div>
  @if(Session::has('message'))
  <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
    {{Session::get('message')}}
  </div>
  @endif
    <table  border="1" cellspacing="0" class=" leading-normal ml-72 bg-white w-[1200px]">
      <thead class=" ">
        <tr>
        <th class="thclass">SN</th>
          <th scope="col" class="thclass">Title</th>
          <th scope="col" class="thclass">Image</th>
          <th scope="col" class="thclass ">Description</th>
          <th scope="col" class="thclass">Action</th>

        </tr>
      </thead>
      <tbody>

        @foreach($blogs as $blog)
        <tr>
        <td class="py-4 px-6 ">{{ $loop->iteration }}</td>
          <td class="tdclass">{{$blog->title}}</td>
          <td class="tdclass"><img src="{{asset('uploads')}}/{{$blog->image}}" height="100px" width="100px"></td>
          <td class="tdclass w-[500px]">{!!$blog->description!!}</td>
          <td>
            <a href="{{route('blog.edit',$blog->id)}}"><button
                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200"><span
                  class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">Update</span></button></a>
            <a href="{{route('blog.delete',$blog->id)}}"><button
                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-200"><span
                  class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0"
                  onclick="return confirm('Are you sure you want to delete this team?');">Delete</span></button></a>
          </td>
        </tr>
        @endforeach
    </table>
    </div>
</body>

@endsection