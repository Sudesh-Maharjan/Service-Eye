<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="course_id" value="{{ $course->id }}">
        <input type="hidden" name="old_image" value="{{ $course->image }}">
        <!-- Existing fields -->
        <label for="name">Course Name:</label>
        <input type="text" name="name" value="{{ $course->name }}" required>
        <label for="short_description">Short Description:</label>
        <textarea name="short_description" required>{{ $course->short_description }}</textarea>
        <label for="description">Description:</label>
        <textarea name="description" required rows="10" cols="150">{{ $course->description }}</textarea>
        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*">
        <label for="courseDuration">Course Duration:</label>
        <input type="text" name="courseDuration" value="{{ $course->courseDuration }}" required>
        <label for="Batchstartdate">Batch Start Date:</label>
        <input type="date" name="Batchstartdate" value="{{ $course->Batchstartdate }}" required>
        <label for="numberseats">Number of Seats:</label>
        <input type="number" name="numberseats" value="{{ $course->numberseats }}" required>
        <label for="format">Format:</label>
<select name="format" required>
    <option value="beginner" {{ $course->format == 'beginner' ? 'selected' : '' }}>Beginner</option>
    <option value="intermediate" {{ $course->format == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
    <option value="advanced" {{ $course->format == 'advanced' ? 'selected' : '' }}>Advanced</option>
</select>
        <!-- Dynamic course program fields -->
        <div id="coursePrograms">
            <h2>Programs</h2>
            <button type="button" id="addProgram">Add Program</button>
            <!-- Existing program fields -->
            @foreach($course->programs as $program)
                <div class="program-input">
                    <input type="hidden" name="existing_program_ids[]" value="{{ $program->id }}">
                    <input type="text" name="program_titles[]" value="{{ $program->title }}">
                    <textarea name="program_descriptions[]" required rows="5" cols="70">{{ $program->description }}</textarea>
                    <input type="file" name="program_icons[]" accept="image/*" >
                    <button type="button" class="remove-program">Remove Program</button>
                </div>
            @endforeach
        </div>
        <div id="syllabusCourses">
            <h2>Syllabus</h2>
            <button type="button" id="addSyllabus">Add Syllabus</button>
            @foreach($course->syllabuses as $syllabus)
                <div class="program-input">
                    <input type="hidden" name="existing_syllabus_ids[]" value="{{ $syllabus->id }}">
                    <input type="text" name="syllabus_titles[]" value="{{ $syllabus->title }}">
                    <textarea name="syllabus_descriptions[]" required rows="5" cols="70">{{ $syllabus->description }}</textarea>
                    <button type="button" class="remove-syllabus">Remove Syllabus</button>
                </div>
            @endforeach
        </div>
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