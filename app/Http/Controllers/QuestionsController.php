<?php

namespace App\Http\Controllers;

use App\Indicator_Group;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Indicator;
use App\Flyer;

class QuestionsController extends Controller
{

    public function index()
    {
        $questions = Indicator::all();

        return view('questions.index', ['questions' => $questions]);
    }

    public function show(Indicator_Group $group)
    {
        dd($group->all());

        $questions = $group->questions;

        return view ('questions.show', ['questions' => $questions, 'group' => $group]);
    }


    public function create(Indicator_Group $group)
    {
        return view ('questions.create')->with('group', $group);
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

    public function destroy()
    {

    }


}

