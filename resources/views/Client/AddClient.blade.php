<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<div class="container">
    <form action="{{route('client.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Add other fields as needed -->
        

        <label for="url">Url:</label>
        <input type="text" name="url" required>

 


        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*">

      
   

        <button type="submit">Submit</button>
    </form>
</div>



</body>
</html>
