<?php
namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
class ClientController extends Controller
{
    public function create()
    {
        return view('Client.AddClient');
    }
    public function show()
{
    $clients = Client::all(); // Fetch all teams without filtering
    return view('Client.ShowClient', compact('clients'));
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
        'url' => 'required|string',
    ]);
    $validatedData['image'] = $image;
    Client::create($validatedData);
    session()->flash("message","client added  Successfully");
    return redirect()->route("client.show");
}
public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('Client.EditClient', compact('client'));
    }
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $image = $client->image; // Preserve existing image if not updated
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = mt_rand(1001, 99999) . '_' . $file->getClientOriginalName();
            $file->move('uploads', $image);
        }
        $validatedData = $request->validate([
            'url' => 'required|string',
        ]);
        $validatedData['image'] = $image;
        $client->update($validatedData);
        session()->flash("message", "Client updated successfully");
        return redirect()->route('client.show');
    }
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        session()->flash("message", "Client deleted successfully");
        return redirect()->route('client.show');
    }
}