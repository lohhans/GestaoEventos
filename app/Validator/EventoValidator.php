<?php

namespace App\Validator;

use PhpSpec\Laravel\LaravelObjectBehavior;
use App\Evento;

class EventoValidator{

    public static function validate($dados){
        $validator = \Validator::make($dados, Evento::$rules, Evento::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, $validator->errors());
        }
    }
}
