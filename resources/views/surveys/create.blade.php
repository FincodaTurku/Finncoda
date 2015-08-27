@extends('default')

@section('title', 'Create Survey Questions')

@section('content')

    <h1>Add a Survey Question to {{ $type->name }}</h1>
    <br>
    <h2>select the question you would like to include in a survey.</h2>


    <hr>

    <div class="row">
    {!! Form::open(array('class' => 'form-group',
        'method' => 'POST',
        'action' => array('SurveyController@store', $type->id)))
        !!}

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