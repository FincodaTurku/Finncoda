@extends('default')

@section('title', 'Survey Types')

@section('content')

    <h1>List of all the Survey Types</h1>
    <br>



        @if(count($types))
            @foreach($types as $type)


                <div class="list-group">
                    <span class="list-group-item clearfix">
                        <a href="{{ action('SurveyTypeController@show', $type->id) }}">
                            {{ $type->name }}
                        </a>

                        <span class="pull-right">
                        {!! Form::open(array('class' => 'form-inline',
                            'method' => 'DELETE',
                            'action' => array('SurveyTypeController@destroy', $type->id)))
                            !!}

                        <a href="{{ action('SurveyController@create', $type->id) }}"
                           class="btn btn-primary"
                           type="submit"
                           name="question">
                            Create a Survey
                            </a>

                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

                        {!! Form::close() !!}
                        </span>
                    </span>
                </div>
            @endforeach
        @else
            <li class="list-group-item">No Groups to display</li>
        @endif




    <script>
        $(document).ready(function(){
            $('form').submit(function(e){
                e.preventDefault();
                url = $(this).parent().attr('action');
                BootstrapDialog.confirm('Are you sure you want to delete?', function(result){
                    if(result) {
                        $.ajax(url);
                    }
                });
            });

        });
    </script>

@stop