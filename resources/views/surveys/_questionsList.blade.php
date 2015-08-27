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