<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseProgram;
use App\Models\syllabus;
use App\Models\SyllabusCourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        return view('courses.AddCourses');
    }
    public function adminshow()
    {
        $courses = Course::with('programs', 'syllabuses')->get();

        return view('courses.ShowCourses', compact('courses'));
    }
    public function usershow()
    {
        $courses = Course::with('programs', 'syllabuses')->get();

        return view('TrainingMain', compact('courses'));
    }
    public function usershowinside($id)
    {
        $courses = Course::with('programs', 'syllabuses')->find($id);
        $similiarcourse = Course::with('programs', 'syllabuses')->take(3)->get();
        return view('Training', compact('courses','similiarcourse'));
    }
    public function store(Request $request)
   
    {
        $image=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=mt_rand(1001,99999).'_'.$file->getClientOriginalName();
            $file->move('uploads',$image);
        }
        // Validate the request for course fields
        $validatedData = $request->validate([
            'name' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required|string',
           
            'courseDuration' => 'required|string',
            'Batchstartdate' => 'required|date',
            'numberseats' => 'required|integer',
            'format' => 'required|string',
        ]);

        $validatedData['image'] = $image;
        
       

        // Create the course
        $course = Course::create($validatedData);
       
    
        // Teams::create($validatedData);
        

        // Handle dynamic course program fields
        $programTitles = $request->input('program_titles', []);
        $programDescriptions = $request->input('program_descriptions', []);
        $programIcons = $request->file('program_icons');
        
       
        $syllabusTitles = $request->input('syllabus_titles', []);
        $syllabusDescriptions = $request->input('syllabus_descriptions', []);
        

        foreach ($programTitles as $key => $title) {
            $icon = null;

      
        if (isset($programIcons[$key]) && $programIcons[$key]->isValid()) {
            $iconFile = $programIcons[$key];
            $icon = mt_rand(1001, 99999) . '_' . $iconFile->getClientOriginalName();
            $iconFile->move('uploads', $icon);
        }
            CourseProgram::create([
             
                'course_id' => $course->id,
                'title' => $title,
                'description' => $programDescriptions[$key],
                'icon' =>$icon,
            ]);
        }
        foreach ($syllabusTitles as $key => $title) {
            SyllabusCourse::create([
             
                'course_id' => $course->id,
                'title' => $title,
                'description' => $syllabusDescriptions[$key],
                
            ]);
        }


        // Redirect or return response as needed
        return redirect()->route('courses.show')->with('success', 'Course created successfully!');
    }
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        

        return view('courses.EditCourses', compact('course'));
    }
    public function update(Request $request,$id)
    {
        $course = Course::findOrFail($id);
        $image = $course->image; // Initialize $image with the existing image
        
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($image && file_exists(public_path('uploads/' . $course->image))) {
                unlink(public_path('uploads/' . $course->image));
            }
    
            // Upload the new image
            $file = $request->file('image');
            $image = mt_rand(1001, 99999) . '_' . $file->getClientOriginalName();
            $file->move('uploads', $image);
        }
        $courseprograms = Course::findOrFail($id)->programs->pluck('id')->map(function ($id) {
            return (string)$id;
        })->toArray();
        $syllabusprograms=Course::findOrFail($id)->syllabuses->pluck('id')->map(function ($id) {
            return (string)$id;
        })->toArray();
        
        // Retrieve the course ID from the request
        $courseId = $request->input('course_id');

    
        // Validate the request for course fields
        $validatedData = $request->validate([
            'name' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'courseDuration' => 'required|string',
            'Batchstartdate' => 'required|date',
            'numberseats' => 'required|integer',
            'format' => 'required|string',
        ]);
    
        $validatedData['image'] = $image;
        // Update the course
        $course = Course::findOrFail($courseId);
        $course->update($validatedData);
    
        // Handle dynamic course program fields
        $programTitles = $request->input('program_titles', []);
        $programDescriptions = $request->input('program_descriptions', []);
        $programIcons = $request->file('program_icons', []);
        $existingProgramIds = $request->input('existing_program_ids', []);
      
   
    
        foreach ($programTitles as $key => $title) {
            $icon = null;

            // Check if the icon file exists at the specified key
            if (isset($programIcons[$key]) && $programIcons[$key]->isValid()) {
                $iconFile = $programIcons[$key];
                $icon = mt_rand(1001, 99999) . '_' . $iconFile->getClientOriginalName();
                $iconFile->move('uploads', $icon);
            } elseif (!empty($existingProgramIds[$key])) {
                // No new icon provided, check if the existing icon is valid
                $program = CourseProgram::where('id', $existingProgramIds[$key])->first();
                if ($program && $program->icon && file_exists(public_path('uploads/' . $program->icon))) {
                    // Keep the existing icon
                    $icon = $program->icon;
                }
            }
            if (!empty($existingProgramIds[$key])) {
                // Update the existing record
                $program = CourseProgram::where('id', $existingProgramIds[$key])->first();
                if ($program) {
                    $program->update([
                        'course_id' => $course->id,
                        'title' => $title,
                        'description' => $programDescriptions[$key],
                        'icon' => $icon ?: $program->icon,
                    ]);
                }
            } else {
                // Create a new record
                $program = CourseProgram::create([
                    'course_id' => $course->id,
                    'title' => $title,
                    'description' => $programDescriptions[$key],
                    'icon' => $icon,
                ]);
            }
        }
     
    
        // Delete removed program entries
        $removedProgramIds = array_diff($courseprograms,$existingProgramIds);
        // dd($existingProgramIds,$courseprograms,$removedProgramIds);
       
   
        CourseProgram::destroy($removedProgramIds);
    
        // Handle dynamic syllabus fields
        $syllabusTitles = $request->input('syllabus_titles', []);
        $syllabusDescriptions = $request->input('syllabus_descriptions', []);
        $existingSyllabusIds = $request->input('existing_syllabus_ids', []);
    
        foreach ($syllabusTitles as $key => $title) {
            if (!empty($existingSyllabusIds[$key])) {
                // Update the existing record
                $syllabus = SyllabusCourse::where('id', $existingSyllabusIds[$key])->first();
                if ($syllabus) {
                    $syllabus->update([
                        'course_id' => $course->id,
                        'title' => $title,
                        'description' => $syllabusDescriptions[$key],
                        
                    ]);
                }
            }else{

            $syllabus = SyllabusCourse::create(
               
                [
                    'course_id' => $course->id,
                    'title' => $title,
                    'description' => $syllabusDescriptions[$key],
                ]
            );
        }

        }
    
        // Delete removed syllabus entries
        $removedSyllabusIds = array_diff($syllabusprograms,$existingSyllabusIds);
        SyllabusCourse::destroy($removedSyllabusIds);
    
        // Redirect or return response as needed
        session()->flash("message", "Course updated successfully");
        return redirect()->route('courses.show');
    }
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        session()->flash("message", "Course deleted successfully");
        return redirect()->route('courses.show');
    }
    
}
