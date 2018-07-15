<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model{

    protected $fillable = ['descricao', 'valor'];

    public function evento(){
		return $this->belongsTo('App\Evento');
   }
}
