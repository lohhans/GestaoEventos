<?php

namespace App\Validator;

use PhpSpec\Laravel\LaravelObjectBehavior;
use App\Voucher;

class VoucherValidator{

    public static function validate($dados){
        $validator = \Validator::make($dados, Voucher::$rules, Voucher::$messages);
        if(!$validator->errors()->isEmpty()){
            //throw new ValidationException($validator, "Erro ao validar voucher");
        }
    }
}
