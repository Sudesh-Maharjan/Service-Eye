<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <!-- Basic Information -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="" placeholder="Enter Name">

    <label for="short_description">Short Description:</label>
    <textarea id="short_description" name="short_description" placeholder="Enter Short Description"></textarea>

    <label for="description">Description:</label>
    <textarea id="description" name="description" placeholder="Enter Description"></textarea>

    <label for="image">Image URL:</label>
    <input type="file" id="image" name="image" value="" placeholder="Enter Image URL">

    <!-- Course Details -->
    <label for="courseDuration">Course Duration:</label>
    <input type="text" id="courseDuration" name="courseDuration"
         value="" placeholder="Enter Course Duration">

    <label for="Batchstartdate">Batch Start Date:</label>
    <input type="date" id="Batchstartdate" name="Batchstartdate" value="">

    <label for="numberseats">Number of Seats:</label>
    <input type="number" id="numberseats" name="numberseats" value="" placeholder="Enter Number of Seats">

    <label for="format">Format:</label>
    <input type="text" id="format" name="format" value="" placeholder="Enter Format">

    <!-- Course Relationship -->
    <label for="course_id">Course ID:</label>
    <input type="text" id="course_id" name="course_id" value="" placeholder="Enter Course ID">

    <!-- Submit button -->
    <button type="submit">Submit</button>
</form>

    
</body>
</html>