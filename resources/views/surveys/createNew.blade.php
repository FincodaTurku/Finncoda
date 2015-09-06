@extends('layout')

@section('title', 'Create New Survey')



    @section('content')

        <h1>Add a Survey Question to</h1>
        <br>
        <h2>select the question you would like to include in a survey.</h2>


        <hr>

        <div class="row">

        {!! Form::open(array('class' => 'form-group',
            'method' => 'POST',
            'action' => array('SurveyController@store', 1)))
            !!}{{-- the 1 can be removed. it just there because of how the routes are set up.--}}



            {!! Form::label('type', 'Select a survey type: ') !!}
            <select name="type" class="form-control">
            @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
            </select>


            <!--Title Field
                Form::text('name : String', 'default : String', params : array) -->
            <div class="form-group">
                {!! Form::label('title', 'Title: ') !!}
                {!! Form::text('title',null, ['class' => 'form-control']) !!}
            </div>


            <hr>

            @include('surveys._questionsList')

            {!! Form::submit('Create Survey', array('class' => 'btn btn-primary')) !!}

            {!! Form::close() !!}
        </div>

    @stop