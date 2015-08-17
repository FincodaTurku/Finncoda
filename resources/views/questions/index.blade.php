@extends('default')

@section('title', 'Survey Questions')

@section('content')

    <h1>List of ALL the Survey Questions</h1>
    <br>



    @if(count($questions))
        @foreach($questions as $question)

            <div class="list-group">
                    <span class="list-group-item clearfix">
                        <a href="{{ action('QuestionsController@show', $question->group_id) }}">
                            {{ $question->indicator }}
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