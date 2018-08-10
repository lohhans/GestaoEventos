<?php

namespace App\Validator;

use PhpSpec\Laravel\LaravelObjectBehavior;
use App\Atividade;

class AtividadeValidator{

    public static function validate($dados){
        $validator = \Validator::make($dados, Atividade::$rules, Atividade::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, $validator->errors());
        }
    }
}
