<?php

namespace App\Http\Controllers;

use App\Survey_Type;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SurveyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $types = Survey_Type::all();


        return view('surveyTypes.index')->with('types', $types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('surveyTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:survey_types,name'
        ]);

        $type = new Survey_Type;

        $type->name = $request->name;

        $type->save();

        flash()->success('Success', "Survey type created successfully");

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Survey_Type $type)
    {
        $surveys = $type->surveys;

        dd($surveys);

        return view ('surveys.show', ['surveys' => $surveys, 'type' => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     *
     * @param Survey_Type $type
     * @return Response
     */
    public function destroy(Survey_Type $type)
    {
        $type->delete();

        return redirect()->back();
    }
}
