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

        @foreach($groups as $group)
            <div class="list-group">
            <span class="list-group-item clearfix">
            <em>{{$group->name}}</em>
            </span>
                @foreach($group->questions as $question)

                    <span class="list-group-item clearfix">
                        <a href="#">
                            {{ $question->indicator }}
                        </a>

                        <span class="pull-right">

                        <!--Question Field checkbox
                            Form::checkbox('name : String', 'value : String', params : array) -->
                        {!! Form::checkbox('question[]', $question->id, true) !!}

{{--[' . $group->name . ']--}}
                        </span>
                    </span>

                @endforeach
                </div>
            @endforeach
            <hr>

            {!! Form::submit('Create Survey', array('class' => 'btn btn-primary')) !!}

            {!! Form::close() !!}
            </div>


@stop