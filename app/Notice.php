<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable =['notice'];

    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
