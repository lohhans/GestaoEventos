<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model{

    protected $fillable = ['cep', 'numero', 'rua', 'bairro', 'cidade', 'estado', 'pais', 'complemento'];

	public static $rules = [
        'cep' => 'required|numeric|digits:8',
        'numero' => 'required|numeric',
		'rua' => 'required',
		'bairro' => 'required',
		'cidade' => 'required',
		'estado' => 'required',
        'pais' => 'required'
	];

	public static $messages = [
		'required'=> 'O campo :attribute é obrigatório'
	];

    public function usuario(){
 		return $this->hasMany('App\Usuario');
    }

    public function evento(){
		return $this->hasMany('App\Evento');
   }

}
