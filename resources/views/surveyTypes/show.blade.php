@extends('...default')

@section('title', 'Survey Questions')

@section('content')

    <h1>List of <strong> {{ $type->name }} </strong> Surveys Created</h1>
    <br>



    @if(count($surveys))

        @foreach($surveys as $survey)

            <div class="list-group">
                    <span class="list-group-item clearfix">
                        <a href="#">
                            {{ ($survey->title)}}
                        </a>
                        <li class="dropdown-header">Author of Survey: {{ $survey->owner_id }}</li>

                        <span class="pull-right">
                        {!! Form::open(array('class' => 'form-inline',
                            'method' => 'DELETE',
                            'action' => array('SurveyController@destroy', $survey->id)))
                            !!}


                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

                        {!! Form::close() !!}
                        </span>
                    </span>
            </div>
        @endforeach
    @else
        <li class="list-group-item">No questions to display</li>
    @endif

@stop