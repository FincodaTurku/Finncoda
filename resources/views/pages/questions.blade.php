@extends('default')

@section('title', 'Survey Questions')

@section('content')

    <h1>List of all the Survey Questions</h1>
    <br>


    <ul class="list-group">

        @foreach($questions as $question)
            <li class="list-group-item">{{ $question->question }}</li>
        @endforeach

    </ul>

@stop