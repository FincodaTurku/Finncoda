<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Indicator_Group;

/*Route::bind('groups', function($value){
    return Indicator_Group::where('id', $value)->first();
});*/

Route::resource('groups', 'IndicatorGroupController');


/*Route::delete('questions/groups/{id}', 'QuestionsController@groupsDestroy');
Route::get('questions/groups/create', 'QuestionsController@groupsCreate');
Route::post('questions/groups/create', 'QuestionsController@groupsStore');*/

Route::get('questions/', 'QuestionsController@index');

Route::resource('groups.questions', 'QuestionsController');

/*Route::get('questions/', 'QuestionsController@index');
Route::get('questions/create/', 'QuestionsController@create');
Route::post('questions/create/', 'QuestionsController@store');

Route::get('/surveys', 'SurveyController@index');
Route::get('/surveys/create', 'SurveyController@create');
Route::post('/surveys/create', 'SurveyController@store');*/

Route::resource('type', 'SurveyTypeController');
Route::resource('type.survey', 'SurveyController');
