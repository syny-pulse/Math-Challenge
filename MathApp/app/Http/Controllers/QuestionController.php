<?php

// app/Http/Controllers/QuestionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\QuestionsImport;
use App\Imports\AnswersImport;
use Maatwebsite\Excel\Facades\Excel;

class QuestionController extends Controller
{
    public function showUploadForm()
    {
        return view('questions.upload', [
            'activePage' => 'questions',
            'activeButton' => 'questions',
            'navName' => 'Questions/Answers'
        ]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'questions_file' => 'required|mimes:xlsx,xls',
            'answers_file' => 'required|mimes:xlsx,xls'
        ]);

        try {
            Excel::import(new QuestionsImport, $request->file('questions_file'));
            Excel::import(new AnswersImport, $request->file('answers_file'));

            return redirect()->route('questions.upload')->with('success', 'Questions and Answers uploaded successfully!');
        } catch (\Exception $e) {
            return redirect()->route('questions.upload')->with('error', 'Error uploading files: ' . $e->getMessage());
        }
    }
}
