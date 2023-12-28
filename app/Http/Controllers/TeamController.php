<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create()
    {
        return view('Teams.AddTeam');
    }
    public function show()
    {
        $teams = Teams::all(); // Fetch all teams without filtering
        return view('Teams.showTeams', compact('teams'));
    }
    public function usercard()
    {
        $teams = Teams::all();
        foreach ($teams as $team) {
            $team->url = json_decode($team->url, true);
        }

        return view('about', compact('teams'));
    }

    public function store(Request $request)
    {
        $image = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = mt_rand(1001, 99999) . '_' . $file->getClientOriginalName();
            $file->move('uploads', $image);
        }
        $validatedData = $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'qoute' => 'required|string',
            'job_description' => 'required|string',
            'interest' => 'required|string',
            'urls' => 'array', // Make sure the 'urls' field is an array
        ]);
        $validatedData['image'] = $image;
        $validatedData['urls'] = array_filter($validatedData['urls'], 'strlen');

        $validatedData['urls'] = json_encode($validatedData['urls']);
        Teams::create($validatedData);

        session()->flash("message", "team added  Successfully");
        return redirect()->back()->with('success', 'Record added successfully!');
    }
    public function edit($id)
    {
        $team = Teams::findOrFail($id);
        return view('Teams.editTeams', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Teams::findOrFail($id);
        $image = $team->image; // Initialize $image with the existing image

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($image && file_exists(public_path('uploads/' . $team->image))) {
                unlink(public_path('uploads/' . $team->image));
            }

            // Upload the new image
            $file = $request->file('image');
            $image = mt_rand(1001, 99999) . '_' . $file->getClientOriginalName();
            $file->move('uploads', $image);
        }


        $validatedData = $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'qoute' => 'required|string',
            'job_description' => 'required|string',
            'interest' => 'required|string',
            'urls' => 'array',

            'is_visible' => 'boolean',
        ]);
        $validatedData['urls'] = isset($validatedData['urls']) ? array_filter($validatedData['urls'], 'strlen') : [];
        $validatedData['urls'] = array_filter($validatedData['urls'], 'strlen');

        $validatedData['urls'] = json_encode($validatedData['urls']);
        $validatedData['image'] = $image;

        $team->update($validatedData);

        session()->flash("message", "Team updated successfully");
        return redirect()->route('teams.show');
    }
    public function delete($id)
    {
        $team = Teams::find($id);
        if (!$team) {
            // Team not found, handle the error accordingly (redirect, show a message, etc.)
            session()->flash("error", "Team not found!");
            return redirect()->route("teams.show");
        }
        $team->delete();
        session()->flash("message", "deleted Successfully");
        return redirect()->route("teams.show");
    }
    public function usershow()
    {
        $teams = Teams::where('is_visible', true)->get(); // Fetch teams where 'is_visible' is true
        return view('Teams.UserShow', compact('teams'));
    }
}
