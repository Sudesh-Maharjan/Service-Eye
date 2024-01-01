<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.ckeditor.com/4.17.0/standard/ckeditor.js"></script>


</head>
<body>
@include('admin.layout.sidebar')
<form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class=""></div>
    <h1 class="text-4xl font-bold ml-80">Courses</h1>
    <h1 class="text-2xl mt-3 font-bold ml-80">Update Course</h1>
    <div class="flex justify-end">
        <div class="flex items-center w-[1200px] p-4 m-4 rounded-md justify-center bg-gray-300">
            <input type="hidden" name="course_id" value="{{ $course->id }}">
        <input type="hidden" name="old_image" value="{{ $course->image }}">
        <!-- Existing fields -->
        <div class="flex flex-col">
        <label for="name" class="m-4 font-bold">Course Name</label>
        <input type="text" name="name" value="{{ $course->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="flex flex-col m-3">
        <label for="image" class="m-4 font-bold">Image</label>
        <input type="file" name="image" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
</div>
<div class="flex flex-col m-3">
        <label for="courseDuration" class="m-4 font-bold">Course Duration</label>
        <input type="text" name="courseDuration" value="{{ $course->courseDuration }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[165px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
</div>
<div class="flex flex-col">
        <label for="Batchstartdate" class="m-4 font-bold">Batch Start Date</label>
        <input type="date" name="Batchstartdate" value="{{ $course->Batchstartdate }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[165px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
</div>
<div class="flex flex-col m-3">
        <label for="numberseats" class="m-4 font-bold">Number of Seats</label>
        <input type="number" name="numberseats" value="{{ $course->numberseats }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[165px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
</div>
<div class="flex flex-col">
        <label for="format" class="m-4 font-bold">Format</label>
        <input type="text" name="format" value="{{ $course->format }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
</div>
        </div>
        </div>
        <div class="flex justify-end">
        <div class="flex items-center w-[1200px] p-4 m-4 rounded-md justify-center bg-gray-300">
            <div class="grid gap-7 grid-cols-2 ">
        <div class="flex flex-col m-3">
        <label for="short_description" class="font-bold my-2">Short Description</label>
        <textarea name="short_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[500px] h-[280px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>{{ $course->short_description }}</textarea>
</div>
<div class="flex flex-col m-3">
        <label for="description" class="font-bold my-2">Description</label>
        <textarea name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[500px] h-[280px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required rows="10" cols="150">{{ $course->description }}</textarea>
</div>
</div>
        </div>
        </div>
        <br>
        <!-- Dynamic course program fields -->
        <div class="flex justify-end m-4 ">
        <div id="coursePrograms" class="bg-gray-300 w-[1200px] p-4 rounded-md  gap-10">
            <div class="flex flex-col">
            <h2 class="text-4xl font-bold">Programs</h2>
        
            <!-- Existing program fields -->
            @foreach($course->programs as $program)
                <div class="program-input">
                    <input type="hidden" name="existing_program_ids[]" value="{{ $program->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    <div class="grid grid-cols-4 gap-8 m-4">
                        <div class="flex  flex-col">
                    <label for="program_titles[]" class="font-bold text-md">Program Title</label>
                    <input type="text" name="program_titles[]" value="{{ $program->title }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    </div>
                    <div class="flex  flex-col">
                    <label for="program_descriptions[]" class="font-bold text-md">Program Description</label>
                    <textarea name="program_descriptions[]" required rows="5" cols="70" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $program->description }}</textarea>
</div>
                    <input type="file" name="program_icons[]" accept="image/*" >
                <button type="button" class="remove-program bg-red-400 text-white rounded-md w-20 h-10 mt-3 p-2 ml-14">Remove</button>

                </div>
                    
                    </div>
            @endforeach
        </div>
        <div class="">
            </div>
            <button type="button" id="addProgram" class="addbutton">Add Program</button></div>
        </div>
    <br>
    <div class="flex justify-end">
    <div id="coursePrograms" class="bg-gray-300 w-[1200px] p-4 rounded-md  gap-10 m-3">
    <div id="syllabusCourses" class="bg-gray-300">
        <h2 class="text-4xl font-bold">Syllabus</h2>
        @foreach($course->syllabuses as $syllabus)
            <div class="program-input m-4 grid grid-cols-3 justify-center items-center gap-20">
                <input type="hidden" name="existing_syllabus_ids[]" value="{{ $syllabus->id }}" placeholder="Title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <div class="">
                <label for="syllabus_titles" class="text-md font-bold">Syllabus title</label>
                <input type="text" name="syllabus_titles[]" value="{{ $syllabus->title }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="">
                <label for="syllabus_descriptions[]" class="text-md font-bold">Description</label>
                <textarea name="syllabus_descriptions[]" required rows="5" cols="70" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $syllabus->description }}</textarea></div>
                <button type="button" class="remove-syllabus rounded-md w-20 h-10 mt-3 bg-red-400 text-white ml-40">Remove</button>
            </div>
        @endforeach
    </div>
    <button type="button" id="addSyllabus" class="addbutton">Add Syllabus</button>
</div>
</div>
<div class="flex justify-center">
    <button type="submit" class="bg-blue-700 p-3 rounded-md text-white ml-36">Update Course</button></div>
    </form>
    <script>
   document.addEventListener('DOMContentLoaded', function () {
    CKEDITOR.replace('description');
    const courseProgramsContainer = document.getElementById('coursePrograms');
    const addProgramButton = document.getElementById('addProgram');
    const syllabusProgramsContainer = document.getElementById('syllabusCourses');
    const addSyllabusButton = document.getElementById('addSyllabus');

    function createProgramElement() {
        const newProgramElement = document.createElement('div');
        newProgramElement.classList.add('program-input');
        newProgramElement.innerHTML = `
            <div class="grid grid-cols-4 gap-8 m-4 bg-gray-300">
                <div class="flex flex-col">
                    <label for="program_titles[]" class="font-bold text-md">Program Title</label>
                    <input type="text" name="program_titles[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="flex flex-col">
                    <label for="program_descriptions[]" class="font-bold text-md">Program Description</label>
                    <textarea name="program_descriptions[]" required rows="5" cols="70" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                <input type="file" name="program_icons[]" accept="image/*">
                <button type="button" class="remove-program bg-red-400 text-white rounded-md w-20 h-10 mt-3 p-2 ml-14">Remove</button>
            </div>
        `;

        return newProgramElement;
    }

    function createSyllabusElement() {
        const newSyllabusElement = document.createElement('div');
        newSyllabusElement.classList.add('program-input');

        newSyllabusElement.innerHTML = `
            <div class="program-input m-4 grid grid-cols-3 justify-center items-center gap-20 bg-gray-300">
                <div class="">
                    <label for="syllabus_titles" class="text-md font-bold">Syllabus title</label>
                    <input type="text" name="syllabus_titles[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="">
                    <label for="syllabus_descriptions[]" class="text-md font-bold">Description</label>
                    <textarea name="syllabus_descriptions[]" required rows="5" cols="70" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                <button type="button" class="remove-syllabus rounded-md w-20 h-10 mt-3 bg-red-400 text-white ml-40">Remove</button>
            </div>
        `;

        return newSyllabusElement;
    }

    addSyllabusButton.addEventListener('click', function () {
        const newSyllabusElement = createSyllabusElement();
        syllabusProgramsContainer.appendChild(newSyllabusElement);
    });

    addProgramButton.addEventListener('click', function () {
        const newProgramElement = createProgramElement();
        courseProgramsContainer.appendChild(newProgramElement);
    });

    // Event delegation for removing programs and syllabuses
    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-program')) {
            event.target.parentElement.remove();
        } else if (event.target.classList.contains('remove-syllabus')) {
            event.target.parentElement.remove();
        }
    });
});
    </script>
</body>
</html>