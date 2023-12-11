<!DOCTYPE html>
<html lang="en">
<head>

   <title>Services</title>
   @vite('resources/css/app.css')
</head>
<body class="m-7">
   <div class="grid grid-cols-3 ">
  <x-service heading="Web development" description="Web We carry more than just good coding skills. Our experience makes us stand out from other web development." image="{{ URL('images/webdev.png') }}"/>
  <x-service heading="UI/UX Design" description="Build the product you need on time with an experienced team that uses a clear and effective design process." image="{{ URL('images/uiux.png') }}"/>
  <x-service heading="Mobile development" description="Web We carry more than just good coding skills. Our experience makes us stand out from other web development." image="{{ URL('images/webm.png') }}"/>
  </div>
</body>
</html>