<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model{

    protected $fillable = ['descricao', 'limite', 'percentual', 'codigoIdentificador'];

	public static $rules = [
		'descricao' => 'required',
		'limite' => 'required|numeric',
		'percentual' => 'required|numeric'
        'codigoIdentificador' => 'required'
	];

	public static $messages = [
		'required'=> 'O campo :attribute é obrigatório',
        'numeric' => 'Este valor deve ser um numero'
	];

    public function inscricao(){
 		return $this->hasMany('App\Inscricao');
    }

    public function eventos(){
	    return $this->belongsToMany('App\Evento');
    }

}
