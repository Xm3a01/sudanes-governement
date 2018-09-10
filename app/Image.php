<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
     protected $fillable =['image' , 'notice_id'];


     public function notice()
     {
         return $this->belongsTo('App\Notice');
     }
}
