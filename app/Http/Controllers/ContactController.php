<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function add_contactus()
    {
        return view("contactus");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function post_contactus(Request $request)
    {
        Contact::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'pnumber' => $request->get('pnumber'),
            'service' => $request->get('service'),
            'message' => $request->get('message')
        ]);
        session()->flash("message", "Message Sent");
        return redirect()->back();
    }
    public function show_contactus()
    {
        $contacts=Contact::all();
        return view("admin.contact.showcontactus",compact('contacts'));
    }
    public function desletecontact($id)
    {
        Contact::find($id)->delete();
        session()->flash("message", "Message Deleted");
        return redirect()->back();
    }
}