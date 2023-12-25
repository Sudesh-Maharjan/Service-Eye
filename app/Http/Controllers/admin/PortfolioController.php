<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\ProjectCat;
use Illuminate\Http\Request;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminindex()
    {
        $projects = Portfolio::all();
        $projectCats = ProjectCat::all();
        return view('admin.project.portfolio', compact('projects', 'projectCats'));
    }
    public function index($id = null)
    {
       
    
        $projects = Portfolio::with('category');
    
        if ($id !== null) {
            $projects = $projects->where('project_cat_id', $id);
        }
    
        $projects = $projects->get();
        $projectCats = ProjectCat::all();
    
        return view('project', compact('projects', 'projectCats'));
    }
    
    public function getProjectsByCategory($category)
    {
        $projects = Portfolio::whereHas('category', function ($query) use ($category) {
            $query->where('project_cat', $category);
        })->get();
        
        return view('admin.project.projects_by_category', compact('projects'));
    }
    public function addproject(Request $request)
    {
        $image = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = mt_rand(1001, 99999) . '_' . $file->getClientOriginalName();
            $file->move('uploads', $image);
        }
        Portfolio::create([
            'name' => $request->get('name'),
            'image' => $image,
            'url' => $request->get('url'),
            'project_cat_id' => $request->get('project_cat_id'),
        ]);
        return redirect()->route('aproject')->with('success', 'Project created successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(Portfolio $project)
    {
        return view('admin.project.show', compact('project'));
    }
    public function updateProject(Request $request, $id)
    {
        $project = Portfolio::findOrFail($id);
        $image = $project->image; // Initialize $image with the existing image
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (file_exists(public_path('uploads/' . $project->image))) {
                unlink(public_path('uploads/' . $project->image));
            }
            // Upload the new image
            $file = $request->file('image');
            $image = mt_rand(1001, 99999) . '_' . $file->getClientOriginalName();
            $file->move('uploads', $image);
        }
        $project->update([
            "name" => $request->get("name"),
            "url" => $request->get("url"),
            "image" => $image,
            'project_cat_id' => $request->get('project_cat_id'),
        ]);
        return redirect()->route('aproject')->with('success', 'Project Updated ');
    }
    public function editaProject($id)
    {
        $project = Portfolio::findOrFail($id);
        $projectCats = ProjectCat::all(); // Assuming you have a ProjectCategory model
        return view('admin.project.editportfolio', compact('project', 'projectCats'));
    }
    public function destroy($id)
    {
        Portfolio::find($id)->delete();
        session()->flash("message", "Project  Deleted");
        return redirect()->back();
    }
}