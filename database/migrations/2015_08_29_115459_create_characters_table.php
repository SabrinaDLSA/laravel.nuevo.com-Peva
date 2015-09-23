<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name')->unique();
            $table->string('Status');
            $table->integer('Age');
            $table->string('Photo');
            $table->integer('actor_id')->unsigned();
            $table->integer('serie_id')->unsigned();
            $table->text('Description');
            $table->timestamps();
            $table->index(['actor_id', 'serie_id']);
            $table
                  ->foreign('serie_id')
                  ->references('id')
                  ->on('series');
            $table
                  ->foreign('actor_id')
                  ->references('id')
                  ->on('actors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('characters');
    }
}
