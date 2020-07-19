<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //
    public function permits()
    {
        return $this->belongsTo('App\Permit');
    }

    protected $guarded = 
    [ 
        'id',
        'created_at',
        'updated_at'
    ];
}
