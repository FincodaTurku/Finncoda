<?php

namespace App\Http\Controllers;

use App\Indicator;
use App\Indicator_Group;
use App\Question;
use App\Questions_Survey;
use App\Survey;
use App\Survey_Type;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Input;

class SurveyController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $surveys = Auth::user()->surveys;

        return view('surveys.index', ['number_of_surveys' => $surveys->count(),
                                      'surveys'           => $surveys]);
    }

    public function create(Survey_Type $type)
    {
        $groups = Indicator_Group::all();

        return view('surveys.create', ['groups' => $groups,
                                       'type'   => $type]);
    }

    /*Could be combined with the function above but adding a simple check
      to see if there's a {type} wildcard in the url */
    public function createNew()
    {
        $groups = Indicator_Group::all();

        $users = User::all();

        $types = Survey_Type::all();

        return view('surveys.createNew', ['groups' => $groups,
                                          'types'  => $types,
                                          'users'  => $users]);

    }

    public function store(Survey_Type $type, Request $request)
    {
        /*From the view questions is an array where the values
          are the questions_ids
            0 => q_id
          and the key is the order.
        */
        $questions = Input::get('question');

        //the Logged in user
        $user = Auth::user();

        $survey = new Survey;

        /*This could probably be handled by the validator*/
        if ( ! Input::exists('type'))
        {
            $type_id = $type->id;
        } else
        {
            $type_id = (int)Input::get('type');
        }


        //Building up the survey model
        $survey->title = $request->title;
        $survey->type_id = $type_id;
        $survey->scale = 5; //Temporary just stubbing it out for now.
        $survey->description = $request->description;

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

        flash()->success('Success', 'Your survey has been created!');


        return redirect()->action('SurveyController@index');
    }

    /**
     * Delete the survey from the DB.
     *
     *
     *
     * @param Survey_Type $type
     * @return Response
     */
    public function destroy(Survey_Type $type, Survey $survey)
    {
        $survey->delete();

        return redirect()->back();
    }


    /**
     * Show the survey form to take a survey
     *
     * Note we return a multidimensional array $groups['group']['questions]
     *
     * @param Survey_Type $type
     * @param Survey $survey
     * @return \Illuminate\View\View
     */
    public function show(Survey_Type $type, Survey $survey)
    {
        $questions = $survey->questions()->orderBy('group_id', 'asc')->get();


        $results = array();

        //separate the questions into an array by their group
        foreach ($questions as $question)
        {
            $results[$question->group_id][] = $question;
        }


        $groups = array();

        //build an array that includes the question group data + questions.
        foreach ($results as $result)
        {
            $group = Indicator_Group::find($result[0]->group_id);
            $groups[] = ['group'     => $group,
                         'questions' => $result];
        }

        /*Note we return a multidimensional array $groups['group']['questions]*/

        return view('surveys.show', ['survey' => $survey, 'questions' => $groups]);
    }

    public function take(Survey_Type $type, Survey $survey, Request $request)
    {
        $user_id = $user = Auth::user()->id;


        //building up the results array before mass insert. can be cleaned up some.
        foreach ($request->get('radio') as $question_id => $answer)
        {
            $results[] = ['survey_id'    => $survey->id,
                          'indicator_id' => (int)$question_id,
                          'user_id'      => $user_id,
                          'answer'       => (int)$answer,
                          'created_at'   => Carbon::now(),
                          'updated_at'   => Carbon::now()];
        }

        DB::table('results')->insert($results);

        flash()->success('success', 'Thank you for competing the survey');

        return redirect()->back();
    }
}
