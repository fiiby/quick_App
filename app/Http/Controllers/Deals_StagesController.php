<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deals_Stages;

class Deals_StagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stages = Deals_Stages::all();
        return view('stages.index', compact('stages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Deals_Stages::create($request->all());
        return redirect()->route('stages.index')->with('success', 'Stage created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DealsStages  $dealsStage
     * @return \Illuminate\Http\Response
     */
    public function show(Deals_Stages $dealsStage)
    {
        return view('stages.show', compact('dealsStage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deals_Stages  $dealsStage
     * @return \Illuminate\Http\Response
     */
    public function edit(Deals_Stages $dealsStage)
    {
        return view('stages.edit', compact('dealsStage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DealsStages  $dealsStage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deals_Stages $dealsStage)
    {
        $dealsStage->update($request->all());
        return redirect()->route('stages.index')->with('success', 'Stage updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deals_Stages  $dealsStage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deals_Stages $dealsStage)
    {
        $dealsStage->delete();
        return redirect()->route('stages.index')->with('success', 'Stage deleted successfully.');
    }
}
