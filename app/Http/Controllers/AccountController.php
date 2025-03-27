<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // Display a listing of accounts and a form to create a new account

    public function index()
    {
        $accounts = Account::all();
        return view('dashboard', compact('accounts'));
    }

    // Store a newly created account in the database

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Account::create([
            'name' => $request->name,
        ]);

        return redirect()->route('dashboard')->with('Success', 'Account created successfully!');
    }
}
