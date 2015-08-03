<?php
namespace App;

use helpers;

?>

<ul class="nav nav-tabs">
  <li role="presentation" class="{{ set_active("url('/')") }}">
  <a href="{{ url('/') }}">Home</a>
  </li>
  <li role="presentation" class="{{ set_active("url('/questions')") }}">
  <a href="{{ url('/questions') }}">Questions</a>
  </li>
  <li role="presentation" class="{{ set_active("url('/questions/create')") }}">
    <a href="{{ url('/questions/create') }}">Create Question</a>
</li>
  <li role="presentation"><a href="{{ url('/surveys') }}">Surveys</a></li>
  <li role="presentation"><a href="{{ url('/surveys/create') }}">Create Survey</a></li>
</ul>