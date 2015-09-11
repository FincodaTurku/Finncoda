<?php

namespace App\Http\Controllers;

use App\Survey;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{

    public function index()
    {
        $surveys = Survey::paginate(10);

        return view('reports.index')->with(['surveys' => $surveys]);
    }

    /**
     * @param $surveyId
     * @return \Illuminate\View\View
     */
    public function show($surveyId)
    {

        $survey = Survey::findOrFail($surveyId);

        //dd($survey->questions->lists('indicator' ));
        //dd($survey->questions->answers->list('answer'));
        foreach( $survey->questions as $question){
            $answers[$question->indicator] = $question->answers;
        }

        dd($answers);

        $user = Auth::user();

        return view('reports.averageResults')->with(['survey' => $survey,
                                                     'user' => $user]);
    }
}
