<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addblog(){
        $url=url('/storeblog');
        $title=("Add Blog");
        $blogs=new Blogs();
        $data=compact("url","title","blogs");
        return view("addblog")->with($data);
    }
    public function store(Request $request){
        $image=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=mt_rand(1001,99999).'_'.$file->getClientOriginalName();
            $file->move('uploads',$image);
        }
        Blogs::create([
            "title"=>$request->get("title"),
            "description"=>$request->get("description"),
            "image"=>$image


        ]);
        session()->flash("message","blog added");
        return redirect()->back();

    }
    public function blogshow(){
        $blogs=Blogs::orderBy("id","asc")->get();
        return view("banner",compact("blogs"));

    }

    public function show(){
        $blogs=Blogs::orderBy("id","asc")->get();
        return view("showblog",compact("blogs"));
    }
    public function delete($id){
        $blogs=Blogs::find($id);
        $blogs->delete();
        session()->flash("message","deleted Successfully");
        return redirect()->route("blog.show");



    }
    public function bloginside($id){
        $blogs=Blogs::find($id);
        return view("bloginside",compact("blogs"));
    //     $jsonBlogs = json_encode($blogs);

    // print_r($jsonBlogs);
    // die;
    }
    public function edit($id){
        $blogs=Blogs::find($id);
        $title="Update Blog";
        $url=url("/updateblog")."/".$id;
        $data=compact("blogs","url","title");
        return view("addblog")->with($data);
    }
    public function update(Request $request,$id){
        $blogs = Blogs::find($id);
        $image = $blogs->image; // Initialize $image with the existing image
    
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (file_exists(public_path('uploads/' . $blogs->image))) {
                unlink(public_path('uploads/' . $blogs->image));
            }
    
            // Upload the new image
            $file = $request->file('image');
            $image = mt_rand(1001, 99999) . '_' . $file->getClientOriginalName();
            $file->move('uploads', $image);
        }

        $blogs->update([
            "title"=>$request->get("title"),
            "description"=>$request->get("description"),
            "image"=>$image,
        ]);
        session()->flash("message","blog updated  Successfully");
        return redirect()->route("blog.show");

        
    }
}
