<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
@include('admin.layout.sidebar')

    <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-end">
        <div class="flex items-center w-[1150px] p-4 m-4 rounded-md justify-center bg-gray-300">
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
        <div class="flex items-center w-[1150px] p-4 m-4 rounded-md justify-center bg-gray-300">
            <div class="grid gap-7 grid-cols-2">
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
        <div id="coursePrograms" class="bg-gray-300 w-[1200px] p-4 rounded-md flex gap-10">
            <div class="">
            <h2 class="text-4xl font-bold">Programs</h2>
            <button type="button" id="addProgram" class="addbutton">Add Program</button>
            <!-- Existing program fields -->
            @foreach($course->programs as $program)
                <div class="program-input">
                    <input type="hidden" name="existing_program_ids[]" value="{{ $program->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    <div class="flex flex-col">
                    <label for="program_titles[]">Program Title</label>
                    <input type="text" name="program_titles[]" value="{{ $program->title }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    <label for="program_descriptions[]">Program Description</label>
                    <textarea name="program_descriptions[]" required rows="5" cols="70" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $program->description }}</textarea>
                    <input type="file" name="program_icons[]" accept="image/*" >
                    
                    <button type="button" class="remove-program bg-white rounded-md w-10 h-10 mt-3">-</button>
                    </div>
                </div>
            @endforeach
            </div>
        <div id="syllabusCourses" class="bg-gray-300">
            <h2 class="text-4xl font-bold">Syllabus</h2>
            @foreach($course->syllabuses as $syllabus)
                <div class="program-input">
                    <input type="hidden" name="existing_syllabus_ids[]" value="{{ $syllabus->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <input type="text" name="syllabus_titles[]" value="{{ $syllabus->title }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <textarea name="syllabus_descriptions[]" required rows="5" cols="70" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $syllabus->description }}</textarea>
                    <button type="button" class="remove-syllabus bg-white rounded-md w-10 h-10 mt-3">-</button>
                </div>
            @endforeach
            <button type="button" id="addSyllabus" class="addbutton">+</button>

        </div>
        </div>
</div>
<br>
        <button type="submit">Update Course</button>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const courseProgramsContainer = document.getElementById('coursePrograms');
            const addProgramButton = document.getElementById('addProgram');
            const syllabusProgramsContainer = document.getElementById('syllabusCourses');
            const addSyllabusButton = document.getElementById('addSyllabus');
            addSyllabusButton.addEventListener('click', function () {
                const syllabusContainer = document.createElement('div');
                syllabusContainer.classList.add('program-input');
                const titleInput = document.createElement('input');
                titleInput.type = 'text';
                titleInput.name = 'syllabus_titles[]';
                titleInput.placeholder = 'Syllabus Title';
                const descriptionInput = document.createElement('textarea');
                descriptionInput.name = 'syllabus_descriptions[]';
                descriptionInput.placeholder = 'Syllabus Description';
                descriptionInput.rows = 5;
descriptionInput.cols = 70;
                const removeSyllabusButton = document.createElement('button');
                removeSyllabusButton.type = 'button';
                removeSyllabusButton.classList.add('remove-syllabus');
                removeSyllabusButton.textContent = 'Remove Syllabus';
                removeSyllabusButton.addEventListener('click', function () {
                    syllabusProgramsContainer.removeChild(syllabusContainer);
                });
                syllabusContainer.appendChild(titleInput);
                syllabusContainer.appendChild(descriptionInput);
                syllabusContainer.appendChild(removeSyllabusButton);
                syllabusProgramsContainer.appendChild(syllabusContainer);
            });
            addProgramButton.addEventListener('click', function () {
                const programInputContainer = document.createElement('div');
                programInputContainer.classList.add('program-input');
                const titleInput = document.createElement('input');
                titleInput.type = 'text';
                titleInput.name = 'program_titles[]';
                titleInput.placeholder = 'Program Title';
                const descriptionInput = document.createElement('textarea');
                descriptionInput.name = 'program_descriptions[]';
                descriptionInput.placeholder = 'Program Description';
                descriptionInput.rows = 5;
descriptionInput.cols = 70;
                const iconInput = document.createElement('input');
                iconInput.type = 'file';
            iconInput.name = 'program_icons[]';
            iconInput.accept = 'image/*';
                const removeProgramButton = document.createElement('button');
                removeProgramButton.type = 'button';
                removeProgramButton.classList.add('remove-program');
                removeProgramButton.textContent = 'Remove Program';
                removeProgramButton.addEventListener('click', function () {
                    courseProgramsContainer.removeChild(programInputContainer);
                });
                programInputContainer.appendChild(titleInput);
                programInputContainer.appendChild(descriptionInput);
                programInputContainer.appendChild(iconInput);
                programInputContainer.appendChild(removeProgramButton);
                courseProgramsContainer.appendChild(programInputContainer);
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