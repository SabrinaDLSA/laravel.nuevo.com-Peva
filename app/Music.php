<?php

namespace nuevo;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Music extends Model implements SluggableInterface
{
  use SluggableTrait;

   protected $sluggable = [
       'build_from' => 'singer',
       'save_to'    => 'slug',
   ];
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'musics';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['singer', 'band', 'genres', 'photo', 'description', 'website'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];
}
