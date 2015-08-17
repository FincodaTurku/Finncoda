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

            $table->integer('owner_id');
            $table->integer('admin_id');
            $table->timestamp('expires_at');
            $table->timestamp('active');
            $table->timestamp('active_till');
            $table->string('admin_email');
            $table->integer('type_id')->unsigned();


            $table->timestamps(); //created at and updated at time fields

            $table->foreign('type_id')
                ->references('id')
                ->on('survey_types');
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
