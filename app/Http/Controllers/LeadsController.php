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
        //
        $leads = Leads::all();
        return view('leads.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('lead.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
            ]
        );
        //create a new lead
        Leads::create($request->all());
        $notification = array(
            'message' => 'Request successful!',
            'alert-type' => 'success'
        );
        //die and dump
        //dd($request->all());
        return redirect()->route('welcome')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Leads $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leads $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leads $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leads $lead)
    {
        //
    }
}
