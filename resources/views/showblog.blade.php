<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
  <body>
    <a href="{{route('addblog')}}"><button class="btn btn-success ">Add Blog</button></a>
    @if(Session::has('message'))
            <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                {{Session::get('message')}}
            </div>
            @endif
  <table class="table table-bordered">
    <tr>
    <th>Title</th>      
    <th class="image">Image</th>
    <th class="description" >Description</th>
    <th>Action</th>

    </tr>
    @foreach($blogs as $blog)
    <tr>
        <td>{{$blog->title}}</td>
        <td><img src="{{asset('uploads')}}/{{$blog->image}}"  height="100px"></td>
        <td class="text-truncate">{!!$blog->description!!}</td>
        <td>
            <a href="{{route('blog.edit',$blog->id)}}"><button class="btn btn-primary">Edit</button></a>
            <a href="{{route('blog.delete',$blog->id)}}"><button class="btn btn-danger">Delete</button></a>
        </td>

    </tr>
    @endforeach
  



  </table>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>