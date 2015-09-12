<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series_characters', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('character_id')->unsigned();
            $table->integer('serie_id')->unsigned();
            $table->index(['character_id', 'serie_id']);
            $table
                  ->foreign('serie_id')
                  ->references('id')
                  ->on('series');
            $table
                  ->foreign('character_id')
                  ->references('id')
                  ->on('characters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('series_characters');
    }
}
