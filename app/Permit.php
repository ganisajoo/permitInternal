<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    //oneToMany Relationship
    public function requestors()
    {
        return $this->hasMany('App\Requestor');
    }

    
    public function visitors()    
    {
        return $this->hasMany('App\Visitors');
    }

    
    public function equipments()
    {
        return $this->hasMany('App\Equipment');        
    }

    public function risks()
    {
        return $this->hasMany('App\Risk');
    }
}
