<?php

namespace App\Http\Controllers;

use Exception;
use App\Evento;
use App\Endereco;
use App\Validator\EventoValidator;
use App\Validator\EnderecoValidator;
use Illuminate\Http\Request;

class EventoController extends Controller{

	protected $evento;
	protected $endereco;

	public function __construct(Evento $evento, Endereco $endereco) {
		$this->evento = $evento;
		$this->endereco = $endereco;
	}

	public function listarEventos(){
        $eventos = \App\Evento::all();
        return view('pages/listarEventos', ['eventos' => $eventos]);
  	}

  	public function cadastrarEvento(Request $request){
		$dataPagamento = $request->dataInicio;
		$dataPag = date('d/m/Y', strtotime($dataPagamento. ' - 5 days'));
		try {
			EnderecoValidator::validate($request->all());
			$this->endereco->fill($request->all());
			$this->endereco->save();
			EventoValidator::validate($request->all());
    		$this->evento->fill($request->all());
			$this->evento->dataPagamento = $dataPag;
			$this->evento->endereco_id = $this->endereco->id;
    		$this->evento->save();
			return redirect('/listar/eventos');
    	}catch(ValidationException $e) {
			return back()->withErros($e->getValidator())->withInput();
    	}
	}

	public function atualizarEvento(Request $request){
		$dataPagamento = $request->dataInicio;
		$dataPag = date('d/m/Y', strtotime($dataPagamento. ' - 5 days'));
		try {
			EventoValidator::validate($request->all());
			$eventoBanco = \App\Evento::find($request->id);
			$eventoBanco->fill($request->all());
			$eventoBanco->dataPagamento = $dataPag;
    		$eventoBanco->update();
    		return redirect('/home');
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
    	}
	}

    public function deletarEvento(Request $request){
		//var_dump($request->evento_id);
		//return "";

		$evento = \App\Evento::find($request->evento_id);
		$evento->delete();

		/*$inscricoes = \App\Inscricao::where('evento_id', '=', $request->evento_id);
		foreach ($inscricoes as $inscricao) {
			$inscricao->delete();
		}
		$atividades = \App\Atividade::where('evento_id', '=', $request->evento_id);
		foreach ($atividades as $atividade) {
			$atividade->delete();
		}

		//	$evento->destroy($request->id);
			$evento->delete();
			*/
		return redirect('/home');
    }

    public function buscarEventoDescricao(Request $request){
        $eventos = \App\Evento::where('descricao', '=', $request->descricao)->get();
        if (sizeof($eventos) != 0) {
            return view('mostrarEvento', ['eventos' => $eventos]);
        }
		else {
			return redirect('/listar/eventos');
        }
    }

	public function abrirPaginaSelecionarEvento(Request $request){
        $eventos = \App\Evento::all();

            return view('pages/seusEventosSelecionarEvento', ['eventos' => $eventos]);

    }

	public function abrirPaginaDetalhamentoEvento(Request $request){
		$atividades = \App\Atividade::where('evento_id', '=', $request->evento_id)->get();
		$evento = \App\Evento::find($request->evento_id);
		$qtdIncricoes = \App\Inscricao::where('evento_id',  '=', $request->evento_id)->count();
		$areas = \App\Area::all();
		$vouchers = \DB::table('evento_voucher')->join('vouchers', 'vouchers.id', '=', 'voucher_id')->where('evento_id', '=',  $request->evento_id)->get();
		return view('pages/seusEventosDetalhamentoEvento', ['areas' => $areas, 'evento' => $evento,
															'qtdIncricoes' => $qtdIncricoes,
															'atividades' => $atividades,
															'vouchers' => $vouchers]);
    }

	public function abrirPaginaSuasParticipacoes(Request $request){
		$evento = \App\Inscricao::join('eventos', 'eventos.id', '=', 'evento_id')->where('usuario_id',  '=', $request->usuario_id)->get();
		return view('pages/suasParticipacoes', ['eventos' => $evento]);
	}



	public function abrirCadastrarEvento(){
		$areas = \App\Area::all();
        return view('pages/cadastrarEvento', ['areas' => $areas]);
	}
}
