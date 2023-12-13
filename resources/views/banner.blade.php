<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-5  ">
            <div class="blog-title ">BLOG</div>
            <div class="blog-description">Our blogs aim to provide the latest news and insights on various topics in the easiest way.</div>
        </div>
        <div class="col-sm-8 col-md-8 col-lg-7 border border-1  d-flex justify-content-center">
          <div class="image-border">
          <img src="{{ asset('images/blogbanner.png') }}" class="banner-image" alt="Banner Blog">
          </div>
          
        
          
      

        </div>
    </div>

    <div class="blog-cards">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <x-blogcards  blogtitle="Changing to a new society" update="2073-01-10" image="{{ asset('images/blogbanner.png') }}" blogdescription="Hello guys my name is Rahul Maharjan.I live in Patan"/>
        <x-blogcards  blogtitle="Changing to a new society" update="2073-01-10" image="{{ asset('images/blogcard.png') }}" blogdescription="Hello guys my name is Rahul Maharjan.I live in Patan"/>
        <x-blogcards  blogtitle="Changing to a new society" update="2073-01-10" image="{{ asset('images/bloginisde-image.png') }}" blogdescription="Hello guys my name is Rahul Maharjan.I live in Patan"/>
       


 
</div>

    </div>

  </div> 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>