<?php

namespace App\Http\Controllers;

use App\Indicator;
use App\Indicator_Group;
use App\Question;
use App\Questions_Survey;
use App\Survey;
use App\Survey_Type;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;

class SurveyController extends Controller {

    public function index()
    {
        $surveys = Survey::with('owner')->get();

        return view('pages.surveys', ['number_of_surveys' => $surveys->count(),
                                      'surveys' => $surveys]);
    }

    public function create($type)
    {
        $groups = Indicator_Group::all();

        return view('surveys.create', ['groups' => $groups,
                                       'type' => $type]);
    }

    public function createNew()
    {
        $groups = Indicator_Group::all();

        $types = Survey_Type::all();

        return view('surveys.createNew', ['groups' => $groups,
                                          'types' => $types]);
    }

    public function store($type, Request $request)
    {
        /*From the view questions is an array where the values
          are the questions_ids
            0 => q_id
          and the key is the order.
        */
        $questions = Input::get('question');

        $user_id = 3; //just a temp field to spike a fake user.
        $survey = new Survey;

        /*This could probably be handled by the validator*/
        if ( ! Input::exists('type'))
        {
            $type_id = $type->id;
        } else
        {
            $type_id = (int)Input::get('type');
        }


        $user = User::find(3);


        //Building up the survey model
        $survey->title = $request->title;
        $survey->type_id = $type_id;


        //a user creates a survey
        $user->surveys()->save($survey);

        /*Attach a model to the parent.
          When updating a belongsTo relationship,
          you may use the associate method. This method
          will set the foreign key on the child model:
        */
        $order = 0;
        foreach ($questions as $question)
        {
            $survey->questions()->attach($question, ['indicator_order' => $order]);
            $order ++;
        };


        return redirect()->back();
    }

    /**
     * Delete the survey from the DB.
     *
     *
     *
     * @param Survey_Type $type
     * @return Response
     */
    public function destroy(Survey_Type $type, $survey)
    {
        Survey::find($survey)->delete();

        return redirect()->back();
    }
}
