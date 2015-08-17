<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_in_groups', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->length(10)->unsigned();;
            $table->integer('user_group_id')->length(10)->unsigned();;

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('user_group_id')
                ->references('id')
                ->on('user_groups');

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
        Schema::drop('user_in_groups');
    }
}
