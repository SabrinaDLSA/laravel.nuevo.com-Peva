<?php

namespace nuevo;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Character extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'Name',
        'save_to'    => 'slug',
    ];
}
