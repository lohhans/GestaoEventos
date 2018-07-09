<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function evento(){
		return $this->hasOne('App\Evento');   
   }
}
