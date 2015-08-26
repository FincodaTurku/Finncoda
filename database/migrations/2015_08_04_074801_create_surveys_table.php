<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('owner_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->text('welcome_message');
            $table->text('end_message');
            $table->timestamp('start_time');
            $table->timestamp('end_time');



            $table->timestamps(); //created at and updated at time fields

            $table->foreign('type_id')
                ->references('id')
                ->on('survey_types');



            $table->foreign('owner_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('surveys');
    }
}
