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
		'dataInicio' => 'required|after:today',
		'dataFim' => 'required|after: dataInicio',
		'dataFimInscricoes' => 'required|before: dataInicio',
		'area_id' => 'required'
	];

	public static $messages = [
		'required'=> 'O campo :attribute é obrigatório',
		'dataInicio.after' => 'A data de inicio nao pode ser anterior ao dia atual!',
		'dataFim.after' => 'A data final nao pode ser anterior ao dia atual!',
		'dataFimInscricoes' => 'A data de conclusao das inscricoes nao pode ser apos o inicio do evento',
		'resumoEvento.max' => 'O resumo do evento nao pode ter mais que 1000 caracteres'
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
