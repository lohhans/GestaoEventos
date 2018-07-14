<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	public function area(){
		return $this->belongsTo('App\Area');
   }

   public function evento(){
	   return $this->hasOne('App\Atividade');   
  }
}
