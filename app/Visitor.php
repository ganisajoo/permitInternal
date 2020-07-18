<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    //
    public function visitors()
    {
        return $this->belongsTo('App\Visitors');
    }
}
