<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function addCourses(){
        return view("courses.AddCourses");



    }
    public function storeCourses(Request $request){
        $image=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=mt_rand(1001,99999).'_'.$file->getClientOriginalName();
            $file->move('uploads',$image);
        }
        Course::create([
            "name"=>$request->get("name"),
            "course_id"=>$request->get("course_id"),
            "short_description"=>$request->get("short_description"),
            "description"=>$request->get("description"),
            "image"=>$image,
            "courseDuration"=>$request->get("courseDuration"),
            "Batchstartdate"=>$request->get("Batchstartdate"),
            "numberseats"=>$request->get("numberseats"),
            "format"=>$request->get("format",
            )


        ]);
        session()->flash("message","course added");
        return redirect()->back();

    }
    public function updateCourses($id){
        return view("courses.AddCourses");
        

    }
}
