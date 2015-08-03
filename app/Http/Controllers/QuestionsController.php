<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Question;

class QuestionsController extends Controller
{

    public function index()
    {
        $questions = Question::all();

        return view ('pages.questions', ['questions' => $questions]);
    }


    public function create()
    {

        $qs = Question::find(1);
        var_dump($qs);
        echo "test <br>";
        var_dump($qs->partOfSurvey);
        return view ('pages.createSurveyQuestions');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required|min:10'
        ]);

        $question = new Question;

        $question->question = $request->question;

        $question->save();

        return redirect('questions');
    }
}

