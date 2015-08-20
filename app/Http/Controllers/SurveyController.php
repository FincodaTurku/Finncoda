<?php

namespace App\Http\Controllers;

use App\Indicator;
use App\Indicator_Group;
use App\Question;
use App\Questions_Survey;
use App\Survey;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;

class SurveyController extends Controller {

    public function index()
    {
        $surveys = Survey::all();

        return view('pages.surveys', ['number_of_surveys' => $surveys->count()]);
    }

    public function create($type)
    {
        $groups = Indicator_Group::all();

        return view('surveys.create', ['groups' => $groups, 'type' => $type]);
    }

    public function createNew()
    {
        return 'Create Survey Page!!';
    }

    public function store($type, Request $request)
    {
        $user_id = 3; //just a temp field to spike a fake user.
        $survey = new Survey;

        $questions = Input::get('question');


        $survey->owner_id = $user_id;
        $survey->title = $request->title;
        $survey->type()->associate($type);

        $survey->save();


        foreach ($questions as $question)
        {
            $survey->questions()->attach($question);

        };


        return redirect()->back();
    }
}
