@extends('layout')

@section('title', 'Create New Survey')



    @section('content')

        <h1>Add a Survey Question to</h1>
        <br>
        <h2>select the question you would like to include in a survey.</h2>


        <hr>

        <div class="row">

        {{--<pre>{{ var_dump($users[1]) }}</pre>--}}



<body>

   <div class="container">
	<br><br>
	  <div class="col-md-8 col-md-offset-2">
		<div class="progress">
		  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
		</div>

        {!! Form::open(array('class' => 'form-group surveyForm',
                    'method' => 'POST',
                    'action' => array('SurveyController@store', 1)))
                    !!}

		<div class="step well">
			<!--Add User Field
			    Form::text('name : String', 'default : String', params : array) -->
			<div class="form-group">
			    {!! Form::label('Add User', 'Add Users: ') !!}
			    {!! Form::text('addUser',null, ['class' => 'form-control']) !!}


			</div>
		</div>
		<div class="step well">
			@include('surveys._selectSurveyType')
		</div>
		<div class="step well">
			@include('surveys._questionsList')
		</div>
		<div class="step well">
			Step 4
		</div>
		<div class="step well">
			Step 5
		</div>


		<button type= "button" class="action back btn btn-info">Back</button>
		<button type= "button" class="action next btn btn-info">Next</button>
		            {!! Form::submit('Create Survey', array('class' => 'action submit btn btn-success')) !!}

                    {!! Form::close() !!}

	 </div>
   </div>

    @stop