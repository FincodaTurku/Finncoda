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


        //factory(App\Indicator::class, 30)->create();
        
        DB::table('indicators')->insert([
            'indicator' => 'Presents ideas that are suitable for tasks.',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Presents creative ideas.',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Presents new ways to implement ideas.',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Evaluate the advantage and disadvantage of actions.',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()
        ]);

             DB::table('indicators')->insert([
            'indicator' => 'Identifies relationships among different components of the task.',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()
        ]);

        DB::table('indicators')->insert([
            'indicator' => 'Faces the tasks from different points of view.',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()

        ]);

        DB::table('indicators')->insert([
            'indicator' => 'Uses available resources ingeniously.',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()

        ]);

        DB::table('indicators')->insert([
            'indicator' => 'Foresees how events will develop.',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Shows enthusiasm',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Persistently pursues the goals.',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Takes daring yet reasonable risks.',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Orients the task towards the target.',
            'group_id' => 1,
            'created_at' => \Carbon\Carbon::now()

        ]);

        //group twwo

        DB::table('indicators')->insert([
            'indicator' => 'Transmits ideas effectively.',
            'group_id' => 2,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Listens to teammates.',
            'group_id' => 2,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Establishes constructive group relationships through dialogue.',
            'group_id' => 2,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Collaborates actively.',
            'group_id' => 2,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Listens to teammates.',
            'group_id' => 2,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Contributes to group functioning.',
            'group_id' => 2,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Takes initiatives.',
            'group_id' => 2,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Drives others to act.',
            'group_id' => 2,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Faces conflicts with flexibility to reach agreements.',
            'group_id' => 2,
            'created_at' => \Carbon\Carbon::now()


        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Applies ethical values.',
            'group_id' => 3,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Takes into account the implications of the task for society.',
            'group_id' => 3,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Is able to work in multidisciplinary environments.',
            'group_id' =>3,
            'created_at' => \Carbon\Carbon::now()

        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Is able to work in multicultural environments.',
            'group_id' => 3,
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('indicators')->insert([
            'indicator' => 'Uses networking contacts to reach goals',
            'group_id' => 3,
            'created_at' => \Carbon\Carbon::now()
        ]);


}
}
