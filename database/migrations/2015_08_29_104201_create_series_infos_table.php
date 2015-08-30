<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;
class CreateSeriesInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series_infos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Genre');
            $table->date('Start');
            $table->date('Finish');
            $table->text('Description');
            $table->integer('Seasons');
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
        Schema::drop('series_infos');
    }
}
