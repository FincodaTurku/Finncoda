@extends('default')

@section('title', 'Indicator Groups')

@section('content')

    <h1>List of all the Indicator Groups</h1>
    <br>



        @if(count($groups))
            @foreach($groups as $group)

                <div class="list-group">
                    <span class="list-group-item clearfix">
                        <a href="{{ action('IndicatorGroupController@show', $group->id) }}">
                            {{ $group->name }}
                        </a>

                        <span class="pull-right">
                        {!! Form::open(array('class' => 'form-inline',
                            'method' => 'DELETE',
                            'action' => array('IndicatorGroupController@destroy', $group->id)))
                            !!}

                        <a href="{{ action('QuestionsController@create', $group->id) }}"
                           class="btn btn-primary"
                           type="submit"
                           name="question">
                            Add Question
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