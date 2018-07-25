<?php

namespace spec\App\Validator;

use App\Validator\EventoValidator;
use App\Evento;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use PhpSpec\Laravel\LaravelObjectBehavior;

class EventoValidatorSpec extends LaravelObjectBehavior
{
    function it_is_initializable(){
        $this->shouldHaveType(EventoValidator::class);
    }

    function let(){
		\Artisan::call("migrate");
		\Artisan::call("db:seed");
	}

    function it_data_final_antes_da_data_inicial(){
        $evento = new Evento;
        $evento->localizacao = "Garanhuns";
        $evento->descricao = "EventoX";
        $evento->dataInicio = '25/07/2019';
        $evento->dataFim = '24/07/2019';
        $evento->dataPagamento = '24/07/2019';
        $evento->area_id = 1;
        $this->shouldThrow('App\Validator\ValidationException')
     		 ->duringValidate($evento->toArray());
    }
}
