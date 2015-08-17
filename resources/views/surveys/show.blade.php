@extends('default')

@section('title', 'Survey Questions')

@section('content')

    <h1>List Survey Questions in</h1>
    <br>
    <h1>{{ $type->name }}</h1>


    @if(count($surveys))
        @foreach($surveys as $survey)

            <div class="list-group">
                    <span class="list-group-item clearfix">
                        <a href="#">
                            {{ $survey->indicator }}
                        </a>

                        <span class="pull-right">
                        {!! Form::open(array('class' => 'form-inline',
                            'method' => 'DELETE',
                            'action' => array('QuestionsController@destroy', $question->id)))
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