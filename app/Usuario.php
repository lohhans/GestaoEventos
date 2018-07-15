<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function tipousuario(){
		return $this->belongsTo('App\Tipousuario');
    }

    public function inscricao(){
 		return $this->hasMany('App\Inscricao');
    }

    public function eventos(){
		return $this->belongsToMany('App\Evento');
  	}
}
