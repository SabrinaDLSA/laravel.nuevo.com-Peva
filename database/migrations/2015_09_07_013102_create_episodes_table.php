<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->integer('Episode');
            $table->string('Description');
            $table->string('Photo');
            $table->integer('serie_id')->unsigned();
            $table->integer('season_id')->unsigned();
            $table->timestamps();

            $table->index(['serie_id', 'season_id']);
            $table
                  ->foreign('serie_id')
                  ->references('id')
                  ->on('series');
            $table
                  ->foreign('season_id')
                  ->references('id')
                  ->on('seasons');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('episodes');
    }
}
