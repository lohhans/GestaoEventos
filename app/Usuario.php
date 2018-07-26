<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $hidden = ['password', 'remember_token'];


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
