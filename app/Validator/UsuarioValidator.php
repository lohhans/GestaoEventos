<?php

namespace App\Validator;

/*Métodos a serem testados... são chamados nos testes do arquivo xxxSpec.php.
 *De alguma forma, vão ser chamados no repositório ou controller.
*/
class UsuarioValidator{

    const CPF = 11;

    public function validacaoDados($nome, $cpf){
            if(strlen($cpf) < self::CPF){
                throw new \InvalidArgumentException("O cpf deve conter 11 digitos!");
            }
            if($nome == ""){
                throw new \InvalidArgumentException("O campo de nome nao pode ser vazio!");
            }
    }

}
