@extends('default')

@section('title', 'Create Survey Questions')

@section('content')

    <h1>Add a Survey Question</h1>
    <br>
    <h2>Enter question you would like to include in a survey.</h2>

    {!! Form::open() !!}

    <!--Question Field
        Form::text('name : String', 'default : String', params : array) -->
    <div class="form-group">
        {!! Form::label('question', 'Question: ') !!}
        {!! Form::text('question',null, ['class' => 'form-control']) !!}
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