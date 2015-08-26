<?php

namespace App\Http\Controllers;

use App\Indicator_Group;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Indicator;


class QuestionsController extends Controller {

    public function index()
    {
        $questions = Indicator::all();

        return view('questions.index', ['questions' => $questions]);
    }

    public function show(Indicator_Group $group)
    {

        $questions = $group->questions;

        return view('questions.show', ['questions' => $questions, 'group' => $group]);
    }


    public function create(Indicator_Group $group)
    {
        return view('questions.create')->with('group', $group);
    }

    public function store(Indicator_Group $group, Request $request)
    {
        $this->validate($request, [
            'question' => 'required|min:10'
        ]);

        $question = new Indicator;

        $question->indicator = $request->question;
        $question->group_id = $group->id;

        $question->save();

        return redirect('groups');
    }

    /**
     * Delete a question
     * @param Indicator $question
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Indicator_Group $group, $question)
    {

        /*
         * So this */
        dd(Indicator::find($question)->delete());
    }

}