<?php

use Illuminate\Database\Seeder;

class indicator_tables_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Indicator_Group::class, 10)->create();
    }
}
