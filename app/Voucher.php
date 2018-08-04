<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model{

    protected $fillable = ['descricao', 'limite', 'percentual'];

	public static $rules = [
		'descricao' => 'required',
		'limite' => 'required',
		'percentual' => 'required'
	];

	public static $messages = [
		'required'=> 'O campo :attribute é obrigatório'
	];

    public function inscricao(){
 		return $this->hasMany('App\Inscricao');
    }

    public function eventos(){
	    return $this->belongsToMany('App\Evento');
    }

}
