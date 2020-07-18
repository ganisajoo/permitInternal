<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    //
    public function risks()
    {
        return $this->belongsTo('App\Permit');
    }
}
