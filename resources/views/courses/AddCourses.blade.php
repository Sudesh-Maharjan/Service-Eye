<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
    <script src="https://cdn.ckeditor.com/4.17.0/standard/ckeditor.js"></script>
</head>
<body>
<h1>Create Course</h1>
<form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Course fields -->
    <label for="name">Course Name:</label>
    <input type="text" name="name" required>
    <label for="short_description">Short Description:</label>
    <textarea name="short_description" required></textarea>
    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea>
    <label for="image">Image:</label>
    <input type="file" name="image" accept="image/*">
    <label for="courseDuration">Course Duration:</label>
    <input type="text" name="courseDuration" required>
    <label for="Batchstartdate">Batch Start Date:</label>
    <input type="date" name="Batchstartdate" required>
    <label for="numberseats">Number of Seats:</label>
    <input type="number" name="numberseats" required>
    <label for="format">Format:</label>
<select name="format" required>
    <option value="beginner">Beginner</option>
    <option value="intermediate">Intermediate</option>
    <option value="advanced">Advanced</option>
</select>
    <!-- Dynamic course program fields -->
    <div id="coursePrograms">
        <!-- Dynamic fields will be added here -->
    </div>
    <button type="button" id="addProgram">Add Program</button>
 <!-- Dynamic syllabus fields -->
 <div id="syllabusCourses">
        <!-- Dynamic fields will be added here -->
    </div>
    <button type="button" id="addSyllabus">Add Syllabus</button>
    <button type="submit">Create Course</button>
</form>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        CKEDITOR.replace('description');
        const courseProgramsContainer = document.getElementById('coursePrograms');
        const addProgramButton = document.getElementById('addProgram');
        const SyllabusProgramsContainer = document.getElementById('syllabusCourses');
const addSyllabusButton = document.getElementById('addSyllabus');
addSyllabusButton.addEventListener('click', function () {
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
    removeSyllabusButton.addEventListener('click', function () {
        SyllabusProgramsContainer.removeChild(SyllabusContainer);
    });
    SyllabusContainer.appendChild(titleInput);
    SyllabusContainer.appendChild(descriptionInput);
    SyllabusContainer.appendChild(removeSyllabusButton); // Corrected variable name
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