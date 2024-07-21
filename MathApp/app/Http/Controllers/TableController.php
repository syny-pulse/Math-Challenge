<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BestSchool;
use App\Models\WorstSchool;
use App\Models\BestParticipant;

class TableController extends Controller
{
    public function index()
    {
        $activePage = 'tables';
        $activeButton = 'tables';
        $navName = 'Tables';

        $best_schools = BestSchool::all();
        $worst_schools = WorstSchool::all();
        $best_participants = BestParticipant::all();

        return view('pages.tables', compact('best_schools', 'worst_schools', 'best_participants', 'activePage', 'activeButton', 'navName'));
    }

    public function create()
    {
        $activePage = 'tables';
        $activeButton = 'create';
        $navName = 'Create Record';

        return view('tables.create', compact('activePage', 'activeButton', 'navName'));
    }


    public function storeBestSchool(Request $request)
    {
        $request->validate([
            'school_id' => 'required',
            'name' => 'required',
            'position' => 'required',
        ]);
    
        // Extract all fields except _token
        $data = $request->except('_token');
    
        BestSchool::create($data);
    
        return redirect()->route('tables.index')->with('success', 'Best School created successfully.');
    }
    

    public function storeWorstSchool(Request $request)
{
    $request->validate([
        'school_id' => 'required',
        'name' => 'required',
        'position' => 'required',
    ]);

    // Extract all fields except _token
    $data = $request->except('_token');

    WorstSchool::create($data);

    return redirect()->route('tables.index')->with('success', 'Worst School created successfully.');
}


    public function storeBestParticipant(Request $request)
    {
        $request->validate([
            'participant_id' => 'required',
            'name' => 'required',
            'school' => 'required',
            'position' => 'required',
        ]);

         // Extract all fields except _token
    $data = $request->except('_token');

        BestParticipant::create($request->all());

        return redirect()->route('tables.index')->with('success', 'Best Participant created successfully.');
    }
}
