<?php

namespace App\Http\Controllers;

use App\Models\Challenge; // Ensure the correct namespace for your Challenge model
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the challenges.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $challenges = Challenge::all();
        $activePage = 'challenges';
        $activeButton = 'challenges';
        $navName = 'Challenges';
        return view('pages.challenges', compact('challenges', 'activePage', 'activeButton', 'navName'));
    }

    /**
     * Show the form for creating a new challenge.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activePage = 'create-challenge';
        $activeButton = 'challenges';
        $navName = 'Create Challenge';
        return view('challenges.create', compact('activePage', 'activeButton', 'navName'));
    }

    /**
     * Store a newly created challenge in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'challenge_id' => 'required|unique:challenges',
            'starting_date' => 'required|date',
            'ending_date' => 'required|date|after_or_equal:starting_date',
            'duration' => 'required|integer|min:1',
            'number_of_questions' => 'required|integer|min:1',
        ]);

        $challenge = new Challenge([
            'challenge_id' => $request->get('challenge_id'),
            'starting_date' => $request->get('starting_date'),
            'ending_date' => $request->get('ending_date'),
            'duration' => $request->get('duration'),
            'number_of_questions' => $request->get('number_of_questions'),
        ]);

        $challenge->save();

        return redirect()->route('challenges.index')->with('success', 'Challenge has been added');
    }
}
