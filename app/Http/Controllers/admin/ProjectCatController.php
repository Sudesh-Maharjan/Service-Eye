<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ProjectCat;
use Illuminate\Http\Request;
class ProjectCatController extends Controller
{
    public function project_cat()
    {
        $projectCats = ProjectCat::all();
        return view('admin.project.project_cat', compact('projectCats'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'project_cat' => 'required|unique:project_cats',
        ]);
        ProjectCat::create([
            'project_cat' => $request->project_cat,
        ]);
        return redirect()->route('project-cat.project_cat')->with('success', 'Project Category Added');
    }
    public function destroy(ProjectCat $projectCat)
    {
        $projectCat->delete();
        session()->flash("message", "Project Category Deleted");
        return redirect()->back();
    }
}