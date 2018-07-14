<?php

namespace spec\App\Validator;

use App\Validator\UsuarioValidator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

//Classe de testes unitários!

class UsuarioValidatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(UsuarioValidator::class);
    }

    function its_cpf_deve_ter_o_minimo_de_caracteres(){
        $faker = \Faker\Factory::create('pt_BR');
        $nome = $faker->name;
        $cpf = "1234567891";
		$this->shouldThrow('\InvalidArgumentException')
			->duringValidacaoDados($nome, $cpf);
    }

    function its_nome_nao_pode_ser_nulo(){
        $faker = \Faker\Factory::create('pt_BR');
        $cpf = $faker->cpf;
        $nome = "";
        $this->shouldThrow('\InvalidArgumentException')
                ->duringValidacaoDados($nome, $cpf);
    }

}
