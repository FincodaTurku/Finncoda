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

Route::get('dashboard', 'DashboardController@index');


/*Routes for indicator groups
  {groups} is a bound wild card. So whenever a route has the {group}
  wild card in it. Laravel will fetch the model to use in the controller.

| @store   | POST     | groups
| @index   | POST     | groups
| @create  | GET      | groups/create
| @destroy | DELETE   | groups/{groups}
| @show    | GET|HEAD | groups/{groups}
| @edit    | GET|HEAD | groups/{groups}/edit

*/
Route::resource('groups', 'IndicatorGroupController');


/*Route to return all the questions in db*/
Route::get('questions/', 'QuestionsController@index');


/*Routes for indicators

| @store   | POST     | groups/questions
| @index   | POST     | groups/questions
| @create  | GET      | groups/{groups}/questions/create
| @destroy | DELETE   | groups/{groups}/questions/{questions}
| @show    | GET|HEAD | groups/{groups}/questions/{questions}
| @edit    | GET|HEAD | groups/{groups}/edit/questions/{questions}/edit

*/
Route::resource('groups.questions', 'QuestionsController');


/*Route to show all available surveys regardless of type*/
Route::get('surveys/', 'SurveyController@index');
/*Route to create a without selecting a type first.*/
Route::get('survey/create', 'SurveyController@createNew');


/*Routes for indicator groups
  {type} is a bound wild card. So whenever a route has the {type}
  wild card in it. Laravel will fetch the model to use in the controller.

| @store   | POST     | type
| @index   | POST     | type
| @create  | GET      | type/create
| @destroy | DELETE   | type/{groups}
| @show    | GET|HEAD | type/{groups}
| @edit    | GET|HEAD | type/{groups}/edit

*/
Route::resource('type', 'SurveyTypeController');


/*Routes for indicator groups
  {type} is a bound wild card. So whenever a route has the {type}
  wild card in it. Laravel will fetch the model to use in the controller.

| @store   | POST     | type/{type}/survey
| @index   | POST     | type/{type}/survey
| @create  | GET      | type/{type}/survey/create
| @destroy | DELETE   | type/{type}/survey/{survey}
| @show    | GET|HEAD | type/{type}/survey/{survey}
| @edit    | GET|HEAD | type/{type}/survey/{survey}/edit

*/
Route::resource('type.survey', 'SurveyController',
    ['except' => ['index']]);



/*
 * OLD Routes can be deleted
 *
 * Route::get('questions/', 'QuestionsController@index');
Route::get('questions/create/', 'QuestionsController@create');
Route::post('questions/create/', 'QuestionsController@store');

Route::get('/surveys', 'SurveyController@index');
Route::get('/surveys/create', 'SurveyController@create');
Route::post('/surveys/create', 'SurveyController@store');*/


/*Route::delete('questions/groups/{id}', 'QuestionsController@groupsDestroy');
Route::get('questions/groups/create', 'QuestionsController@groupsCreate');
Route::post('questions/groups/create', 'QuestionsController@groupsStore');*/