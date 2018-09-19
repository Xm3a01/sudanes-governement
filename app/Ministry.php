<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
