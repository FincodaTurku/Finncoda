<?php

namespace App\Http\Controllers;

use App\Question;
use App\Questions_Survey;
use App\Survey;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
{

    public function index()
    {
        $surveys = Survey::all();

        return view('pages.surveys', ['number_of_surveys' => $surveys->count()]);
    }

    public function create()
    {
        $questions = Question::all();

        return view('pages.createSurvey', ['questions' => $questions]);
    }

    public function store(Request $request)
    {
        $user_id = 3; //just a temp field to spike a fake user.
        $survey = new Survey;

        $survey->created_by = $user_id;
            $survey->save();


        foreach($request->question_id as $id)
        {
            $q_survey = new Questions_Survey;

            $q_survey->question_id = $id;
            $q_survey->survey_id = 1;

            $q_survey->save();
        }

        return redirect('surveys');
    }
}
