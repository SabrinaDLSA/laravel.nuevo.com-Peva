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

            $table->integer('character_id')->unsigned();
            $table->integer('actor_id')->unsigned();
            $table->timestamps();
            $table->index(['actor_id', 'character_id']);
            $table
                  ->foreign('actor_id')
                  ->references('id')
                  ->on('actors');
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
        Schema::drop('actor_characters');
    }
}
