<?php

use Illuminate\Database\Seeder;

class survey_types_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('survey_types')->insert([
           'name' => 'Self Survey'
        ]);
        DB::table('survey_types')->insert([
            'name' => 'Peer Survey',
        ]);
    }



}
