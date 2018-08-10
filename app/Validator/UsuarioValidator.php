<?php

namespace App\Validator;

use PhpSpec\Laravel\LaravelObjectBehavior;
use App\Usuario;

class UsuarioValidator{

    const CPF = 11;

    public static function validate($dados){
        $validator = \Validator::make($dados, Usuario::$rules, Usuario::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, $validator->errors());
        }
    }
}
