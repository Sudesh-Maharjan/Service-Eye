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
    $client = Client::all(); // Fetch all teams without filtering
    return view('Teams.showTeams', compact('client'));
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
    return redirect()->back();
}
}
