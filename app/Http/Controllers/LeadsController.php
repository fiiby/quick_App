<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use Illuminate\Http\Request;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leads = Leads::all();
        return view('leads.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Leads::create($request->all());

        $notification = array(
            'message' => 'Lead created successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('leads.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Leads $lead)
    {
        return view('leads.show', compact('lead'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leads $lead)
    {
        return view('leads.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leads $lead)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $lead->update($request->all());

        $notification = array(
            'message' => 'Lead updated successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('leads.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leads $lead)
    {
        $lead->delete();

        return redirect()->route('leads.index')->with('success', 'Lead deleted successfully');
    }
}
