@extends('layout')

@section('title', 'Survey Questions')

@section('content')


    <h1 id="title">FINCODA - {{ $survey->title }}</h1><hr id="line">
    <br />
    <p>The following survey should be answered according a scale from 0-5. O = Not observed/not demonstrated,
        1 = Very poor, 2 =    Needs to improve, 3 = pass, 4 = good and 5 = excellent.
        Please do not leave any blanks. Not all assessment tasks and situations are
        conducive to demonstrating all of the capacities and skills to which the items refer; in such cases "0" is
        the appropriate response. </p>
    <br />

    {!! Form::open(array('class' => 'form-group',
            'method' => 'POST',
            'action' => array('SurveyController@take', $survey->type->id, $survey->id))) !!}

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

    @include('surveys._surveyResponseList')

    <!--- submite Field --->
    <div class="form-group pull-right">
        {!! Form::submit('submit', ['class' => 'btn-lg btn-success']) !!}
    </div>


    {!! Form::close() !!}

@stop