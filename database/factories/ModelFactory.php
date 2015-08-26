<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'email' => $faker->email,
        'password' => Hash::make('password'),
    ];
});

$factory->define(App\Indicator_Group::class, function ($faker)
{
    return [
        'name' => $faker->unique()->word(),
    ];
});

$factory->define(App\Indicator::class, function($faker){
    return [
        'indicator' => $faker->sentence,
        'group_id' => App\Indicator_Group::all()->random()->id,
    ];
});








