<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model{

    public function inscricao(){
 		return $this->hasMany('App\Inscricao');
    }

    public function eventos(){
	    return $this->belongsToMany('App\Evento');
    }

}
