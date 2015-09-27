<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
          $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('singer_id');
            $table->string('band');
            $table->string('genres');
            $table->string('photo');
            $table->text('description');
            $table->date('start');
            $table->date('finish');
            $table->string('website');
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
        Schema::drop('musics');
    }
}
