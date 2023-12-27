<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
    <script src="https://cdn.ckeditor.com/4.17.0/standard/ckeditor.js"></script>
    @vite('resources/css/app.css')
</head>
<style>
    .program-input {
        margin-bottom: 15px;
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 5px;
        background-color: #F9F9F9;
    }
    .program-input input,
    .program-input textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }
    .program-input button {
        background-color: #E74C3C;
        color: white;
        padding: 8px 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .program-input input[type="file"] {
        width: 100%;
        margin-bottom: 10px;
        box-sizing: border-box;
        color: red;
        font-size: 12px;
    }
</style>
<body class="font-sans antialiased bg-gray-100">
    <div class="w-2/12">
        @include('admin.layout.sidebar')
    </div>
    <div class=" w-10/12 container mx-auto p-8 max-w-xl">
        <h1 class="text-2xl font-bold mb-4">Create Course</h1>
        <div className="flex justify-center flex-auto p-14 md:p-4">
            <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div className="flex flex-wrap justify-center">
                    <div class="">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-600">Course Name:</label>
                            <input type="text" name="name" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                        </div>
                        <div class="mb-4">
                            <label for="short_description" class="block text-sm font-medium text-gray-600">Short Description:</label>
                            <textarea name="short_description" required class="mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-600">Description:</label>
                            <textarea name="description" id="description" required class="mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-600">Image:</label>
                            <input type="file" name="image" accept="image/*" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                        </div>
                    </div>
                    <div class="">
                        <div class="mb-4">
                            <label for="courseDuration" class="block text-sm font-medium text-gray-600">Course Duration:</label>
                            <input type="text" name="courseDuration" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                        </div>
                        <div class="mb-4">
                            <label for="Batchstartdate" class="block text-sm font-medium text-gray-600">Batch Start Date:</label>
                            <input type="date" name="Batchstartdate" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                        </div>
                        <div class="mb-4">
                            <label for="numberseats" class="block text-sm font-medium text-gray-600">Number of Seats:</label>
                            <input type="number" name="numberseats" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                        </div>
                        <div class="mb-4">
                            <label for="format" class="block text-sm font-medium text-gray-600">Format:</label>
                            <select name="format" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                            </select>
                        </div>
                        <!-- Dynamic course program fields -->
                        <div id="coursePrograms" class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-600">Add Program:</label>
                        </div>
                        <button type="button" id="addProgram" class="px-4 py-2  bg-green-500 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring focus:border-blue-300">
                            Add Program
                        </button>
                        <!-- Dynamic syllabus fields -->
                        <div id="syllabusCourses" class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-60 mt-4">Add Syllabus:</label>
                        </div>
                        <button type="button" id="addSyllabus" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring focus:border-green-300">
                            Add Syllabus
                        </button>
                        <div class="mb-4">
                        </div>
                        <button type="submit" class="mt-4 px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-800 focus:outline-none focus:ring focus:border-indigo-300">
                            Create Course
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            CKEDITOR.replace('description');
            const courseProgramsContainer = document.getElementById('coursePrograms');
            const addProgramButton = document.getElementById('addProgram');
            const SyllabusProgramsContainer = document.getElementById('syllabusCourses');
            const addSyllabusButton = document.getElementById('addSyllabus');
            addSyllabusButton.addEventListener('click', function() {
                const SyllabusContainer = document.createElement('div');
                SyllabusContainer.classList.add('program-input');
                const titleInput = document.createElement('input');
                titleInput.type = 'text';
                titleInput.name = 'syllabus_titles[]';
                titleInput.placeholder = 'Syllabus Title';
                const descriptionInput = document.createElement('textarea');
                descriptionInput.name = 'syllabus_descriptions[]';
                descriptionInput.placeholder = 'Syllabus Description';
                const removeSyllabusButton = document.createElement('button');
                removeSyllabusButton.type = 'button';
                removeSyllabusButton.classList.add('remove-program');
                removeSyllabusButton.textContent = 'Remove Program';
                removeSyllabusButton.addEventListener('click', function() {
                    SyllabusProgramsContainer.removeChild(SyllabusContainer);
                });
                SyllabusContainer.appendChild(titleInput);
                SyllabusContainer.appendChild(descriptionInput);
                SyllabusContainer.appendChild(removeSyllabusButton);
                SyllabusProgramsContainer.appendChild(SyllabusContainer);
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
        });
    </script>
</body>
</html>