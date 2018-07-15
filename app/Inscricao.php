<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model{

    public function usuario(){
		return $this->belongsTo('App\Usuario');
    }

    public function evento(){
		return $this->belongsTo('App\Evento');
    }

    public function voucher(){
		return $this->belongsTo('App\Voucher');
    }

}
