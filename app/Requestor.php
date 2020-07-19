<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestor extends Model
{
    //
    public function permits()
    {
        return $this->belongsTo('App\Permits');
    }

    protected $guarded = 
    [ 
        'id',
        'created_at',
        'updated_at'
    ];
}
