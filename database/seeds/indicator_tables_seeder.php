<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class indicator_tables_seeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

        $faker = Faker::create();

        factory(App\Indicator_Group::class, 10)->create();



        DB::table('indicators')->insert([
            'indicator' => $faker->sentence(),
            'group_id'  => App\Indicator_Group::all()->random()->id,

        ]);

    }
}
