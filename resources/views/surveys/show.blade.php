@extends('default')

@section('title', 'Survey Questions')

@section('content')

    <h1>{{ $survey->title }}</h1>
    <br>
    <h3>Please answer the survey questions. <p>Each questions is on a scale of 1-5, 5 being the best.</h2>

    <table class="table">
    <tr>
        <th></th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
    </tr>
    <tr>
        <td>{{ $questions[2]->indicator }}</td>
        <td><input type="radio" name="row-1" data-col="1"></td>
        <td><input type="radio" name="row-1" data-col="2"></td>
        <td><input type="radio" name="row-1" data-col="3"></td>
    </tr>
    <tr>
        <td>Snickers</td>
        <td><input type="radio" name="row-2" data-col="1"></td>
        <td><input type="radio" name="row-2" data-col="2"></td>
        <td><input type="radio" name="row-2" data-col="3"></td>
    </tr>
    <tr>
        <td>Butterfingers</td>
        <td><input type="radio" name="row-3" data-col="1"></td>
        <td><input type="radio" name="row-3" data-col="2"></td>
        <td><input type="radio" name="row-3" data-col="3"></td>
    </tr>
    </table>



@stop