@extends('layout')

@section('title', 'Indicator Groups')

@section('content')

    <h1>Create an Indicator Group</h1>
    <br>


    {!! Form::open(array('action' => array('IndicatorGroupController@store'))) !!}

    <!--Question Field
        Form::text('name : String', 'default : String', params : array) -->
    <div class="form-group">
        {!! Form::label('indicator_group', 'Indicator Group: ') !!}
        {!! Form::text('indicator_group',null, ['class' => 'form-control']) !!}
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