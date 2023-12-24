<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function addtraining(){
        $url=('/admin/posttraining');
        $title="Add training";
        $training=new Training();

        return view("AddTraining",compact("url","title","training"));
    }
    public function storetraining(Request $request){
        $image=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=mt_rand(1001,99999).'_'.$file->getClientOriginalName();
            $file->move('uploads',$image);
        }
        Training::create([
            "title"=>$request->get("title"),
            "description"=>$request->get("description"),
            "image"=>$image,
            "date"=>$request->get("date")

        ]);
        session()->flash("message","training  added");
        return redirect()->back();
      
        

        // print_r($request->all());
        // die;

    }
    public function showadmintraining(){
        $trainings=Training::all();
        return view("showtraining",compact('trainings'));


    }
   
    public function updatetraining($id){
        $training=Training::find($id);
       $url="/admin/edittraining"."/".$id;
        $title="Update Training";
        

        return view("AddTraining",compact("url","title","training"));
    }
    public function edittraining(Request $request,$id){
        $training = Training::find($id);
        $image = $training->image; // Initialize $image with the existing image
    
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (file_exists(public_path('uploads/' . $training->image))) {
                unlink(public_path('uploads/' . $training->image));
            }
    
            // Upload the new image
            $file = $request->file('image');
            $image = mt_rand(1001, 99999) . '_' . $file->getClientOriginalName();
            $file->move('uploads', $image);
        }
        $training->update([
            "title"=>$request->get("title"),
            "description"=>$request->get("description"),
            "image"=>$image,
            "date"=>$request->get("date")

        ]);
        session()->flash("message","training  updated");
        return redirect()->route("training.show");



    }
    public function deletetraining($id){
        Training::find($id)->delete();
        session()->flash("message","training  deleted");
        return redirect()->route("training.show");
    }
}
