<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class face extends Model
{
    protected $table = 'faces';

       public function emotion()
       {
           return $this->hasMany('App\emotion');
       }

}
