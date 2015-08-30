<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use nuevo\Serie;

class SeriesTableSeeder extends Seeder{
  public function run(){
    Serie::create(
    [
      'Name'=>'Pretty Little Liars',
      'Photo'=> 'http://cdn.theatlantic.com/assets/media/img/posts/2014/01/Pretty_Little_Liars/c819ce319.jpg'
      ]);

  Serie::create(
  [
    'Name'=>'Xena Warrior Princess',
    'Photo' => 'http://i1.wp.com/www.fiz-x.com/wp-content/uploads/2015/08/Xena-redemption.jpg?resize=620%2C412'
    ]);

    Serie::create(
    [
      'Name'=>'Orphan Black',
      'Photo' => 'http://www.serielizados.com/wp-content/uploads/orphan-black-tatiana-maslany-clones-sarah-alison-cosima-helena-rachel.jpg'
      ]);
  }
}
