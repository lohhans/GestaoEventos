<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model{

	use SoftDeletes;
	protected $fillable = ['localizacao', 'descricao', 'resumoEvento', 'dataInicio', 'dataFim', 'dataFimInscricoes', 'area_id', 'endereco_id'];
	protected $dates = ['deleted_at'];

	public static $rules = [
		'descricao' => 'required',
		'resumoEvento' => 'max:1000',
		'dataInicio' => 'required',
		'dataFim' => 'required',
		'dataFimInscricoes' => 'required',
		'area_id' => 'required'
	];

	public static $messages = [
		'required'=> 'O campo :attribute é obrigatório'
	];

	public function area(){
		return $this->belongsTo('App\Area');
   	}

	public function endereco(){
		return $this->belongsTo('App\Endereco');
   	}

   	public function atividade(){
	   return $this->hasOne('App\Atividade');
  	}

  	public function boleto(){
	  return $this->hasMany('App\Inscricao');
  	}

  	public function vouchers(){
		return $this->belongsToMany('App\Voucher');
  	}

	public function usuarios(){
		return $this->belongsToMany('App\Usuario');
  	}


}
