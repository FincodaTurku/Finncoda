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

        $this->call('users_table_seeder');

        $this->command->info('Users table seeded!');



        $this->call('indicator_groups_table_seeder');

        $this->command->info('Indicator Groups table seeded!');



        $this->call('indicators_table_seeder');

        $this->command->info('Indicators table seeded!');



        $this->call('survey_types_table_seeder');

        $this->command->info('Survey Types table seeded!');











        Model::reguard();
    }
}
