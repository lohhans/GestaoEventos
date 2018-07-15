<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	public function area(){
		return $this->belongsTo('App\Area');
   }

   public function atividade(){
	   return $this->hasOne('App\Atividade');
  }

  public function boleto(){
	  return $this->hasMany('App\Inscricao');
  }

}
