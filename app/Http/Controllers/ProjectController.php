<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\service;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create()
    {
        return view('Projects.AddProject');
    }
    public function store(Request $request)
    {
        $image=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=mt_rand(1001,99999).'_'.$file->getClientOriginalName();
            $file->move('uploads',$image);
        }
        $validatedData = $request->validate([
            'name' => 'required|string',
            'url' => 'required|string',
        
        ]);
        $validatedData['image'] = $image;
   

       
        Project::create($validatedData);

        session()->flash("message","Project added  Successfully");
        return redirect()->route('project.show');
    }
    public function show()
    {
        $teams = Project::all(); // Fetch all teams without filtering
        return view('Projects.ShowProject', compact('teams'));
    }
    public function usershow()
    {
        $projects = Project::orderBy("id","asc")->get();
        $services = service::orderBy("id", "asc")->take(4)->get();
        return view('Homepage', compact('projects','services'));
    }
    
    public function edit($id)
    {
        $team = Project::findOrFail($id);
        return view('Projects.EditProject', compact('team'));
    }
    public function update(Request $request,$id){
        $teams = Project::find($id);
        $image = $teams->image; // Initialize $image with the existing image
    
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if($image!=null)
            {
                   // Upload the new image
            $file = $request->file('image');
            $image= mt_rand(1001, 99999) . '_' . $file->getClientOriginalName();
            $file->move('uploads', $image);

            }
            else if ($image && file_exists(public_path('uploads/' . $teams->image))) {
                unlink(public_path('uploads/' . $teams->image));    
                 $file = $request->file('image');
                $image = mt_rand(1001, 99999) . '_' . $file->getClientOriginalName();
                $file->move('uploads', $image);
            }
          
    
         
        }

        $teams->update([
            "name"=>$request->get("name"),
            "url"=>$request->get("url"),
            "image"=>$image,
        ]);
        session()->flash("message","project updated  Successfully");
        return redirect()->route("project.show");
    }
    public function delete($id){
        $team=Project::find($id);
        $team->delete();
        session()->flash("message","deleted Successfully");
        return redirect()->route("project.show");
    
    
    
    }
}
