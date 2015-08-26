<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class indicators_table_seeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {


        factory(App\Indicator::class, 30)->create();



    }
}
