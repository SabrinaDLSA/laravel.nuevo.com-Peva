<?php

namespace nuevo;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Serie extends Model implements SluggableInterface
{
  use SluggableTrait;

   protected $sluggable = [
       'build_from' => 'Name',
       'save_to'    => 'slug',
   ];
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'series';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['Name', 'Photo'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];
  /**
     * Get the phone record associated with the user.
     */
    public function Series_infos()
    {
        return $this->hasOne('nuevo\Series_info');
    }
}
