<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<div class="container">
    <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if(Session::has('message'))
            <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                {{Session::get('message')}}
            </div>
            @endif

        <!-- Add other fields as needed -->
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="url">Url:</label>
        <input type="text" name="url" required>


      

       

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*">

     

        <button type="submit">Submit</button>
    </form>
</div>



</body>
</html>
