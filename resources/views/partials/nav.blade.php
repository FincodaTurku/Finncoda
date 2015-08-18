<?php
namespace App;

use helpers;

?>

<ul class="nav nav-tabs">
    <li role="presentation">
        <a href="{{ url('/') }}">Home</a>
    </li>



    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Questions <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="{{action('IndicatorGroupController@create') }}">Create Indicator Group</a></li>
            <li><a href="{{ url('/questions/create') }}">Create Question</a></li>

            <li role="separator" class="divider"></li>
            <li class="dropdown-header">View/Delete</li>
            <li><a href="{{ action('IndicatorGroupController@index') }}">Indicator Groups</a></li>
            <li><a href="{{ url('/questions/') }}">Questions</a></li>
        </ul>
    </li>



    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
         aria-expanded="false">Surveys
         <span class="caret"></span>
         </a>
        <ul class="dropdown-menu">
            <li><a href="{{action('SurveyTypeController@create') }}">Create Survey Type</a></li>
            <li><a href="{{ url('survey/create') }}">Create Survey</a></li>

            <li role="separator" class="divider"></li>
            <li class="dropdown-header">View/Delete</li>
            <li><a href="{{ action('SurveyTypeController@index') }}">Survey Types</a></li>
            <li><a href="{{ url('/surveys/') }}">Surveys</a></li>
        </ul>
    </li>





    <li role="presentation">
        <a href="{{ url('/surveys/create') }}">Create Survey</a></li>
    <li role="presentation">
        <a href="{{ url('/surveys/create') }}">Create Indicator Groups</a></li>
</ul>
