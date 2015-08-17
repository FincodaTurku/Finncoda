<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_indicators', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('survey_id')->length(10)->unsigned();
            $table->integer('indicator_id')->length(10)->unsigned();
            $table->integer('indicator_order');

            $table->foreign('survey_id')
                ->references('id')
                ->on('surveys');

            $table->foreign('indicator_id')
                ->references('id')
                ->on('indicators');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('survey_indicators');
    }
}
