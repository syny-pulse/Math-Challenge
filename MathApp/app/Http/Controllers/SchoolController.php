<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the schools.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        $activePage = 'schools';
        $activeButton = 'schools';
        $navName = 'Schools';
        return view('pages.schools', compact('schools', 'activePage', 'activeButton', 'navName'));
    }

    /**
     * Show the form for creating a new school.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activePage = 'create-school';
        $activeButton = 'schools';
        $navName = 'Create School';
        return view('schools.create', compact('activePage', 'activeButton', 'navName'));
    }

    /**
     * Store a newly created school in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'school_id' => 'required|unique:schools',
            'school_regno' => 'required',
            'district' => 'required',
            'name' => 'required',
            'representative_name' => 'required',
            'representative_email' => 'required|email',
        ]);

        $school = new School([
            'school_id' => $request->get('school_id'),
            'school_regno' => $request->get('school_regno'),
            'district' => $request->get('district'),
            'name' => $request->get('name'),
            'representative_name' => $request->get('representative_name'),
            'representative_email' => $request->get('representative_email'),
        ]);

        $school->save();

        return redirect('/schools')->with('success', 'School has been added');
    }
}
