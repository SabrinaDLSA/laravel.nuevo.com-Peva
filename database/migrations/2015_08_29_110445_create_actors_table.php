<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
          $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Name')->unique();
            $table->string('Birthplace');
            $table->string('Nationality');
            $table->string('Photo');
            $table->text('Description');
            $table->integer('Age');
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
        Schema::drop('actors');
    }
}
