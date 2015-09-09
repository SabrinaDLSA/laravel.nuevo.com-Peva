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
            $table->integer('id_character')->unsigned();
            $table->integer('id_serie')->unsigned();
            $table->index(['id_character', 'serie_id']);
            $table
                  ->foreign('id_serie')
                  ->references('id')
                  ->on('series');
            $table
                  ->foreign('id_character')
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
