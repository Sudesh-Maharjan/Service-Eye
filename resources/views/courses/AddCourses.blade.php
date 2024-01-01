@extends("layouts.AdminLayout")
@section("title")
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
    <script src="https://cdn.ckeditor.com/4.17.0/standard/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/3e146d907a.js" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')

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
@endsection
   @section("content")
<body class="font-sans antialiased bg-gray-100">
    <div class="w-2/12">

    </div>
    
    <div class=" w-10/12 container mx-auto p-8 max-w-xl ">
        <h1 class="text-4xl font-bold mb-4">Courses</h1>
        <div className="flex justify-center flex-auto p-14 md:p-4">
            <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data" class="bg-white p-5 rounded-md w-[750px]">
                @csrf
                <div className="flex flex-wrap justify-center ">
                <div class="flex flex-col">
                <a href="{{redirect()->back()}}" class="flex">
                    <button onclick="history.back()" class="bg-black text-white p-2 rounded-full h-11 flex justify-center items-center w-11"><i class="fa-solid fa-arrow-left"></i></button>
                </a>
                </div>
        <h1 class="text-2xl font-bold mb-4 my-3">Add Course</h1>

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
                        <button type="button" id="addProgram" class="addbutton">
                            Add Program
                        </button>
                        <!-- Dynamic syllabus fields -->
                        <div id="syllabusCourses" class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-60 mt-4">Add Syllabus:</label>
                        </div>
                        <button type="button" id="addSyllabus" class="addbutton">
                            Add Syllabus
                        </button>
                        <div class="mb-4">
                        </div>
                        <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200">
                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
                            Create Course

                            </span>
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
@endsection