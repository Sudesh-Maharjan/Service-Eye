<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Url;
use Illuminate\Http\Request;
class UrlController extends Controller
{
    public function showurl()
    {
        $urls = Url::all();
        return view('admin.contact.url', compact('urls'));
    }
    public function storeurl(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required|unique:urls',
        ]);
        Url::create([
            'name' => $request->name,
            'url' => $request->url,
        ]);
        return redirect()->route('showurl')->with('success', 'URL added successfully.');
    }
    public function editurl($id)
    {
        $url = Url::findOrFail($id);
        return view('admin.contact.editurl', compact('url'));
    }
    public function updateurl(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required|unique:urls,url,' . $id,
        ]);
        $url = Url::findOrFail($id);
        $url->update([
            'name' => $request->name,
            'url' => $request->url,
        ]);
        return redirect()->route('showurl')->with('success', 'URL updated successfully.');
    }
    public function deleteurl($id)
    {
        $url = Url::findOrFail($id);
        $url->delete();
        session()->flash("message", "URL Deleted");
        return redirect()->back();
    }
}