<?php

namespace App\Validator;

use PhpSpec\Laravel\LaravelObjectBehavior;
use App\Evento;

class EventoValidator{

    public static function validate($dados){
        $validator = \Validator::make($dados, Evento::$rules, Evento::$messages);
        $dataAtual = date('d/m/y');
        if($dataAtual > $dados['dataInicio'] OR $dataAtual > $dados['dataFim']) {
    		$validator->errors()->add('dataInvalida',
    									'As datas nao podem ser inferiores ao dia de hoje');
        }
        if($dados['dataFim'] < $dados['dataInicio']) {
    		$validator->errors()->add('dataInvalida',
    									'A data final nao pode ser inferior a data inicial');
        }
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro ao validar evento");
        }
    }
}
