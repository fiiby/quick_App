<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use App\Models\Organizations;
use App\Models\Contacts;
// use App\Models\Deals_Stages;
use Illuminate\Http\Request;

class DealController extends Controller
{
    public function index()
    {
        $deals = Deal::all();
        return view('deals.index', compact('deals'));
    }

    public function show($id)
    {
        $deal = Deal::findOrFail($id);
        return view('deals.show', compact('deal'));
    }

    public function create()
    {
        $organizations = Organizations::all();
        $contacts = Contacts::all();
        // $stages = Deals_Stages::all();
        return view('deals.create', compact('organizations', 'contacts', 'stages'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'account_id' => 'required',
            'contact_id' => 'required',
            // 'stage' => 'required',
            'value' => 'required',
            'probability' => 'required',
            'expected_close_date' => 'required',
            'notes' => 'required',
        ]);

        $deal = Deal::create($validatedData);
        return redirect()->route('deals.show', $deal->id)->with('success', 'Deal created successfully');
    }

    public function edit($id)
    {
        $deal = Deal::findOrFail($id);
        $organizations = Organizations::all();
        $contacts = Contacts::all();
        // $stages = Deals_Stages::all();
        return view('deals.edit', compact('deal', 'organizations', 'contacts', 'stages'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'account_id' => 'required',
            'contact_id' => 'required',
            // 'stage' => 'required',
            'value' => 'required',
            'probability' => 'required',
            'expected_close_date' => 'required',
            'notes' => 'required',
        ]);

        Deal::whereId($id)->update($validatedData);
        return redirect()->route('deals.show', $id)->with('success', 'Deal updated successfully');
    }

    public function destroy($id)
    {
        $deal = Deal::findOrFail($id);
        $deal->delete();
        return redirect()->route('deal.index')->with('success', 'Deal deleted successfully');
    }
}
