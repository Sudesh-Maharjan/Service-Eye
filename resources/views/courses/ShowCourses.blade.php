<!-- resources/views/courses/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Courses</title>
</head>

<body>
    <h1>All Courses</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Programs</th>
                <th>Syllabuses</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td>
                    <ul>
                        @foreach($course->programs as $program)
                        <li>{{ $program->title }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    <ul>
                        @foreach($course->syllabuses as $syllabus)
                        <li>{{ $syllabus->title }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
