<?php

namespace nuevo;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model implements SluggableInterface
{
  use SluggableTrait;

  protected $sluggable = [
      'build_from' => 'Name',
      'save_to'    => 'slug',
  ];

}
