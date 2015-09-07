

@if(count($surveys))
    @foreach($surveys as $survey)

        <div class="list-group">
                    <span class="list-group-item clearfix">
                        <a href="{{ action('SurveyController@show', [$survey->type_id, $survey->id]) }}">
                            {{ $survey->title }}
                        </a>
                        <small>{{$survey->owner->first_name}} {{ $survey->owner->last_name }}</small>

                        <span class="pull-right">

                        {!! Form::open(array('class' => 'form-inline',
                            'method' => 'DELETE',
                            'action' => array('SurveyController@destroy', $survey->type_id, $survey->id)))
                            !!}


                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

                            {!! Form::close() !!}
                        </span>
                    </span>

                    <!-- {{ action('SurveyController@destroy', [$survey->type_id, $survey->id]) }} -->
        </div>
    @endforeach
@else
    <li class="list-group-item">No Surveys to display</li>
@endif


    {!! Form::open() !!}

        <a href="{{ action('SurveyController@createNew') }}"
           class="btn btn-primary"
           type="submit"
           name="question">
            Create a new survey
        </a>

    {!! Form::close() !!}