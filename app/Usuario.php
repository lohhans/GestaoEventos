<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $fillable = ['nome', 'email', 'cpf', 'login', 'password', 'tipousuario_id'];
    protected $hidden = ['password', 'remember_token'];

    public static $rules = [
		'nome' => 'required',
		'email' => 'required',
		'login' => 'required',
		'password' => 'required',
		'tipousuario_id' => 'required'
	];

	public static $messages = [
		'required'=> 'O campo :attribute é obrigatório'
	];


    public function tipousuario(){
		return $this->belongsTo('App\Tipousuario');
    }

    public function endereco(){
        return $this->belongsTo('App\Endereco');
    }

    public function inscricao(){
 		return $this->hasMany('App\Inscricao');
    }

    public function eventos(){
		return $this->belongsToMany('App\Evento');
  	}

    public function atividades(){
		return $this->belongsToMany('App\Atividade');
  	}
}
