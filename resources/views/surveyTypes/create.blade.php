@extends('default')

@section('title', 'Indicator Groups')

@section('content')

    <h1>Create A Survey Type</h1>
    <br>


    {!! Form::open(array('action' => array('SurveyTypeController@store'))) !!}

    <!--Question Field
        Form::text('name : String', 'default : String', params : array) -->
    <div class="form-group">
        {!! Form::label('survey_type', 'Survey Type: ') !!}
        {!! Form::text('name',null, ['class' => 'form-control']) !!}
    </div>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

                <!--- Submit button Field --->
        <div class="form-group">
            {!! Form::submit('save', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

@stop