<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/trainingcard.css') }}">
  </head>
  <body>
    <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <x-trainingcard coursename="Python" coursedescription="Full stack python course" months="3"  image="{{ asset('images/bloginisde-image.png') }}"/>
        <x-trainingcard coursename="Mern" coursedescription="Full stack mern course" months="2"  image="{{ asset('images/blogbanner.png') }}"/>
        <x-trainingcard coursename="Python" coursedescription="Full stack python course" months="5"  image="{{ asset('images/bloginisde-image.png') }}"/>
       

 

</div>

    </div>
 

  </body>
</html>