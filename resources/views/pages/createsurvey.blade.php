@extends('default')

@section('title', 'Create Survey')

@section('content')

    <h1>Create your survey</h1>
    <br>
    <h2>Select the questions which you want to include in your survey.</h2>


    <ul class="list-group input-group">
        {!! Form::open() !!}

        @foreach($questions as $question)

            <span class="input-group-addon">
            <input type="checkbox" aria-label="..." name="question_id[]" value="{{$question->id}}">
            </span>

            <li class="list-group-item">
                {{ $question->question }}
            </li>
        @endforeach
    </ul>
    
    <!--- create survey Field --->
    <div class="form-group">
        {!! Form::submit('Create Survey', ['class' => 'btn btn-primary']) !!}
    </div>
    
    {!! Form::close() !!}
    

@stop