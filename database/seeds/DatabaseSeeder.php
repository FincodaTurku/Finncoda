<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('survey_types_table_seeder');

        $this->command->info('Survey Types table seeded!');



        factory(App\Indicator_Group::class, 10);


        $faker = Faker::create();
        foreach (\App\Indicator_Group::all() as $group)
        {
            dd($group);
        }




        $this->command->info('Indicator Groups table seeded!');



        $this->command->info('Indicators table seeded!');


        Model::reguard();
    }
}
