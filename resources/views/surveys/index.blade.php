@extends('layout')

@section('title', 'Surveys')

@section('content')

    <h1>Number of Surveys in the Database</h1>
    <br>
    <h2>{{ $number_of_surveys }}</h2>

    <div class="row">
        <div class="list-group"></div>
    </div>


    @include('surveys._list')

@stop