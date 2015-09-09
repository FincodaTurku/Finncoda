<?php

namespace App\Http\Controllers;

use App\Survey;
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

        dd($survey->results);

        $user = Auth::user();

        return view('reports.averageResults')->with(['survey' => $survey,
                                                     'user' => $user]);
    }
}
