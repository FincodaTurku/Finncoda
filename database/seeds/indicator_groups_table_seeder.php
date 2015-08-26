<?php

use Illuminate\Database\Seeder;

class indicator_groups_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Indicator_Group::class, 5)
            ->create()
            ->each(function($u) {
                $u->questions()->save(factory(App\Indicator::class)->make());
            });
    }
}
