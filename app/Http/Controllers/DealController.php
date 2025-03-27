<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use Illuminate\Http\Request;

class DealController extends Controller
{
    // Display a listing of the deals on the dashboard

    public function index()
    {
        $deals = Deal::all();
        dd($deals);
        return view('dashboard', ['deals' => $deals]);
    }

    // Show Form for creating a new deal

    public function create()
    {
        return view('create-deal');
    }

    // Store a newly created deal in the database

    public function store(Request $request)
    {
        $request->validate([
            'title' => $request->title,
        ]);

        return redirect()->route('dashboard')->with('success', 'Deal created successfully');
    }
}
