<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model{

    protected $fillable = ['descricao', 'valor', 'evento_id'];

    public static $rules = [
		'descricao' => 'required',
		'valor' => 'required',
		'evento_id' => 'required'
	];

    public static $messages = [
		'required'=> 'O campo :attribute é obrigatório'
	];

    public function evento(){
		return $this->belongsTo('App\Evento');
   }

   public function usuarios(){
       return $this->belongsToMany('App\Usuario');
   }
}
