<?php

namespace nuevo;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Comic extends Model implements SluggableInterface
{
  use SluggableTrait;

   protected $sluggable = [
       'build_from' => 'name',
       'save_to'    => 'slug',
   ];
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'comics';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'description', 'author'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];
}
