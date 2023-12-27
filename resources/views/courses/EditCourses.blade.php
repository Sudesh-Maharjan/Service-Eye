<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Courses </title>
    <script src="https://cdn.ckeditor.com/4.17.0/standard/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>

</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #F8FAFC;
        padding: 20px;
    }
    .program-input {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #E2E8F0;
        border-radius: 8px;
        background-color: #FFFFFF;
    }
    .program-input input,
    .program-input textarea,
    .program-input button {
        margin-top: 10px;
        padding: 10px;
        box-sizing: border-box;
    }
    .program-input input[type="text"],
    .program-input textarea {
        width: 100%;
        margin-bottom: 10px;
    }
    .program-input button {
        background-color: #E53E3E;
        color: #FFFFFF;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }
    .program-input button:hover {
        background-color: #C53030;
    }
    .remove-syllabus,
    .remove-program {
        background-color: #E53E3E;
        color: #FFFFFF;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        padding: 8px;
        transition: background-color 0.3s ease-in-out;
    }
    .remove-syllabus:hover,
    .remove-program:hover {
        background-color: #C53030;
    }
</style>
<body class="font-sans antialiased bg-gray-100">
    <div class="w-2/12">
        @include('admin.layout.sidebar')
    </div>
    <div class=" container mx-auto px-8 max-w-4xl">
        <h1 class="text-4xl font-bold my-3">Courses</h1>
        <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data" class=" ">
            <div class="bg-white p-5 rounded-md">
        <div class="flex flex-col">
            <a href="{{redirect()->back()}}" class="flex">
                <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
            </a>
            </div>
            <h1 class="text-2xl font-bold my-4">Update Course</h1>
            @csrf
            <input type="hidden" name="course_id" value="{{ $course->id }}">
            <input type="hidden" name="old_image" value="{{ $course->image }}">
            <!-- Existing fields -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Course Name:</label>
                <input type="text" name="name" value="{{ $course->name }}" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="short_description" class="block text-sm font-medium text-gray-600">Short Description:</label>
                <textarea name="short_description" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>{{ $course->short_description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-600">Description:</label>
                <textarea name="description" id="description" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>{{ $course->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-600">Image:</label>
                <input type="file" name="image" accept="image/*" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="courseDuration" class="block text-sm font-medium text-gray-600">Course Duration:</label>
                <input type="text" name="courseDuration" value="{{ $course->courseDuration }}" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="Batchstartdate" class="block text-sm font-medium text-gray-600">Batch Start Date:</label>
                <input type="date" name="Batchstartdate" value="{{ $course->Batchstartdate }}" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="numberseats" class="block text-sm font-medium text-gray-600">Number of Seats:</label>
                <input type="number" name="numberseats" value="{{ $course->numberseats }}" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="format" class="block text-sm font-medium text-gray-600">Format:</label>
                <select name="format" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                    <option value="beginner" {{ $course->format == 'beginner' ? 'selected' : '' }}>Beginner</option>
                    <option value="intermediate" {{ $course->format == 'intermediate' ? 'selected' : '' }}>Intermediate
                    </option>
                    <option value="advanced" {{ $course->format == 'advanced' ? 'selected' : '' }}>Advanced</option>
                </select>
            </div>
            <!-- Dynamic course program fields -->
            <div id="coursePrograms" class="mb-4">
                <h2 class="text-xl font-bold mb-2">Programs</h2>
                <!-- Existing program fields -->
                @foreach($course->programs as $program)
                <div class="program-input grid gap-4">
                    <input type="hidden" name="existing_program_ids[]" value="{{ $program->id }}">
                    <input type="text" name="program_titles[]" value="{{ $program->title }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="Program Title">
                    <textarea name="program_descriptions[]" required class="mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="Program Description">{{ $program->description }}</textarea>
                    <input type="file" name="program_icons[]" accept="image/*" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                    <div class="w-2/6">
                        <button type="button" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring focus:border-red-300">
                            Remove program
                        </button>
                    </div>
                </div>
                @endforeach
                <button type="button" id="addProgram" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring focus:border-green-300">
                    Add Program
                </button>
            </div>
            <div id="syllabusCourses" class="mb-4">
                <h2 class="text-xl font-bold mb-2">Syllabus</h2>
                @foreach($course->syllabuses as $syllabus)
                <div class="program-input grid gap-4">
                    <input type="hidden" name="existing_syllabus_ids[]" value="{{ $syllabus->id }}">
                    <input type="text" name="syllabus_titles[]" value="{{ $syllabus->title }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="Syllabus Title">
                    <textarea name="syllabus_descriptions[]" required class="mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="Syllabus Description">{{ $syllabus->description }}</textarea>
                    <div class="w-2/6">
                        <button type="button" class="remove-syllabus px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring focus:border-red-300">
                            Remove Syllabus
                        </button>
                    </div>
                </div>
                @endforeach
                <button type="button" id="addSyllabus" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring focus:border-green-300">
                    Add Syllabus
                </button>
            </div>
            <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
              <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update Course</span>  
            </button>
            </div>
        </form>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const courseProgramsContainer = document.getElementById('coursePrograms');
                const addProgramButton = document.getElementById('addProgram');
                const syllabusProgramsContainer = document.getElementById('syllabusCourses');
                const addSyllabusButton = document.getElementById('addSyllabus');
                addSyllabusButton.addEventListener('click', function() {
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
                    removeSyllabusButton.addEventListener('click', function() {
                        syllabusProgramsContainer.removeChild(syllabusContainer);
                    });
                    syllabusContainer.appendChild(titleInput);
                    syllabusContainer.appendChild(descriptionInput);
                    syllabusContainer.appendChild(removeSyllabusButton);
                    syllabusProgramsContainer.appendChild(syllabusContainer);
                });
                addProgramButton.addEventListener('click', function() {
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
                    removeProgramButton.addEventListener('click', function() {
                        courseProgramsContainer.removeChild(programInputContainer);
                    });
                    programInputContainer.appendChild(titleInput);
                    programInputContainer.appendChild(descriptionInput);
                    programInputContainer.appendChild(iconInput);
                    programInputContainer.appendChild(removeProgramButton);
                    courseProgramsContainer.appendChild(programInputContainer);
                });
                document.addEventListener('click', function(event) {
                    if (event.target.classList.contains('remove-program')) {
                        event.target.parentElement.remove();
                    } else if (event.target.classList.contains('remove-syllabus')) {
                        event.target.parentElement.remove();
                    }
                });
            });
        </script>
    </div>
</body>
</html>