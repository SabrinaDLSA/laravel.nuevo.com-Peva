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
            $table->string('Name');
            $table->string('Status');
            $table->integer('Age');
            $table->integer('id_actor')->unsigned();
            $table->text('Descripion');
            $table->timestamps();

            $table
                  ->foreign('id_actor')
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
