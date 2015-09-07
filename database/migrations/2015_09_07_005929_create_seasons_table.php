<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->integer('Season');
            $table->integer('Episodes');
            $table->string('Description');
            $table->string('Photo');
            $table->integer('serie_id')->unsigned();
            $table->timestamps();

            $table
                  ->foreign('serie_id')
                  ->references('id')
                  ->on('series');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('seasons');
    }
}
