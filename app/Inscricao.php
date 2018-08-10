<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model{

    protected $fillable = ['valor', 'usuario_id', 'evento_id', 'voucher_id'];

	public static $rules = [
		'valor' => 'required|numeric',
		'dataInscricao' => 'required',
		'usuario_id' => 'required',
		'evento_id' => 'required'
	];

	public static $messages = [
		'required'=> 'O campo :attribute é obrigatório',
        'valor.numeric' => 'Este valor deve ser um numero'
	];

    public function usuario(){
		return $this->belongsTo('App\Usuario');
    }

    public function evento(){
		return $this->belongsTo('App\Evento');
    }

    public function voucher(){
		return $this->belongsTo('App\Voucher');
    }

    public function boletos(){
		    return $this->belongsToMany('App\Boleto');
    }


}
