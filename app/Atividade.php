<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model{

    protected $fillable = ['descricao', 'valor', 'evento_id'];

    public static $rules = [
		'descricao' => 'required|max:1000',
		'valor' => 'required|numeric',
		'evento_id' => 'required'
	];

    public static $messages = [
		'required'=> 'O campo :attribute é obrigatório'
        'numeric' => 'Este valor deve ser um numero'
	];

    public function evento(){
		return $this->belongsTo('App\Evento');
   }

   public function usuarios(){
       return $this->belongsToMany('App\Usuario');
   }
}
