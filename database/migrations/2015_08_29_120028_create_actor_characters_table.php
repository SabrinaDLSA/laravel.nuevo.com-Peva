<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_characters', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_character')->unsigned();
            $table->integer('id_actor')->unsigned();
            $table->timestamps();

            $table
                  ->foreign('id_actor')
                  ->references('id')
                  ->on('actors');
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
        Schema::drop('actor_characters');
    }
}
