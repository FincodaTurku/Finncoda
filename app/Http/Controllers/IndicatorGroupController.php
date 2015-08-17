<?php

namespace App\Http\Controllers;

use App\Indicator_Group;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndicatorGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $groups = Indicator_Group::all();

        return view('groups.index')->with('groups', $groups);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('groups.create');
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
            'indicator_group' => 'required|unique:indicator_groups,name'
        ]);

        $group = new Indicator_Group;

        $group->name = $request->indicator_group;

        $group->save();

        flash()->success('Success', "Question group created successfully");

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Indicator_Group $group)
    {
        $questions = $group->questions;

        return view ('questions.show', ['questions' => $questions, 'group' => $group]);
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
     * @param  int  $id
     * @return Response
     */
    public function destroy(Indicator_Group $group)
    {
        $group->delete();

        return redirect()->back();

    }

}
