<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Evento;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventoControllerTest extends TestCase{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample(){
        $this->assertTrue(true);
    }

    public function testeCadastrarComDadosCorretos(){
        $evento = new Evento(['localizacao' => 'Recife',
                              'descricao' => 'CP',
                              'dataInicio' => '26/07/2019',
                              'dataFim' => '28/07/2019',
                              'dataPagamento' => '25/07/2019',
                              'area_id'=> 1]);

        $funcionarioMock = \Mockery::mock('App\Evento');
        $funcionarioMock->shouldReceive('save')->once();
        $funcionarioMock->shouldReceive('fill')->once();

        $this->app->instance('App\Evento', $funcionarioMock);

        $response = $this->call('POST', '/cadastrar/evento', $evento->toArray());
        $response->assertSee('/listar/eventos');
    }
}
