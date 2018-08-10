<?php

namespace App\Validator;

use PhpSpec\Laravel\LaravelObjectBehavior;
use App\Inscricao;

class InscricaoValidator{

    public static function validate($dados){
        $validator = \Validator::make($dados, Inscricao::$rules, Inscricao::$messages);
        if($dados['valor'] < 0) {
    		$validator->errors()->add('valorInvalido',
    									'O valor da inscricao nao pode ser inferior a 0');
        }
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, $validator->errors());
        }
    }
}
