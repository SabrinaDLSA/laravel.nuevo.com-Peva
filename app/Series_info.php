<?php

namespace nuevo;

use Illuminate\Database\Eloquent\Model;

class Series_info extends Model
{

    //
    public function Serie()
    {
        return $this->belongsTo('App\Serie');
    }
}
