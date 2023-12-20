<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;
class ServicesController extends Controller
{
   
    public function showservices(){
        return view('Services');
    }
    public function addservices(){
        $url=url('/admin/storeservices');
        $title=("Add Service");
        $services=new service();
        $data=compact("url","title","services");
        return view("AddServices")->with($data);
    }
    public function storeservices(Request $request){
        $icon=null;
        if($request->hasFile('icon')){
            $file=$request->file('icon');
            $icon=mt_rand(1001,99999).'_'.$file->getClientOriginalName();
            $file->move('uploads',$icon);
        }
        service::create([
            "title"=>$request->get("title"),
            "description"=>$request->get("description"),
            "icon"=>$icon


        ]);
        session()->flash("message","blog added");
        return redirect()->back();




    }
    public function adminservicesshow(){
        $services=service::orderBy("id","asc")->get();
        return view("showadminservices",compact("services"));

    }
    public function servicesshow(){
        $services=service::orderBy("id","asc")->get();
        return view("Services",compact("services"));

    }
    public function adminservicesedit($id){
        $services=service::find($id);
        $title="Update Service";
        $url=url("/admin/updateservices")."/".$id;
        $data=compact("services","url","title");
        return view("Addservices")->with($data);
    }
    public function adminservicesupdate(Request $request,$id){
        $blogs = service::find($id);
        $icon = $blogs->icon; // Initialize $image with the existing image
    
        if ($request->hasFile('icon')) {
            // Delete the old image if it exists
            if (file_exists(public_path('uploads/' . $blogs->icon))) {
                unlink(public_path('uploads/' . $blogs->icon));
            }
    
            // Upload the new image
            $file = $request->file('icon');
            $icon = mt_rand(1001, 99999) . '_' . $file->getClientOriginalName();
            $file->move('uploads', $icon);
        }

        $blogs->update([
            "title"=>$request->get("title"),
            "description"=>$request->get("description"),
            "icon"=>$icon,
        ]);
        session()->flash("message","service updated  Successfully");
        return redirect()->route("showadminservices");
    }
    public function deleteadminservices($id){
        $services=service::find($id);
        $services->delete();
        session()->flash("message","service deleted  Successfully");
        return redirect()->back();
    }
}
