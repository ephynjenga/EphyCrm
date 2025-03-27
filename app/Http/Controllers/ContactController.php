<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Display listing of contacts and a form to create a new contact

    public function index()
    {
        $contacts = Contact::all();

        return view('dashboard', compact('contacts'));
    }

    // Store a newly created contact in the database

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        return redirect()->route('dashboard')->with('Success', 'Contact created successfully!');
    }
}
