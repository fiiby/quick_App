<?php

namespace App\Http\Controllers;

use App\Models\Organizations;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Organizations::all();
        return view('organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // Add more validation rules as needed
        ]);

        Organizations::create($request->all());

        $notification = [
            'message' => 'Organization created successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('organizations.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Organizations $organization)
    {
        return view('organizations.show', compact('organizations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organizations $organization)
    {
        return view('organizations.edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organizations $organization)
    {
        $request->validate([
            'name' => 'required',
            // Add more validation rules as needed
        ]);

        $organization->update($request->all());

        $notification = [
            'message' => 'Organization updated successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('organizations.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organizations $organization)
    {
        $organization->delete();

        $notification = [
            'message' => 'Organization deleted successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('organizations.index')->with($notification);
    }
}
