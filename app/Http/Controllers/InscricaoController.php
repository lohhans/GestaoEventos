<?php

namespace App\Http\Controllers;

use App\Inscricao;
use DateTime;
use \App\Evento;
use \App\Atividade;
use App\Validator\InscricaoValidator;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use \App\Usuario;

class InscricaoController extends Controller{

    protected $inscricao;

	public function __construct(Inscricao $inscricao) {
		$this->inscricao = $inscricao;
	}

    public function listarInscricoes(){
		$inscricoes = \App\Inscricao::all();
		return view('pages/listarInscricoes', ['inscricoes' => $inscricoes]);
    }

    public function cadastrarInscricao(Request $request){
		$dataAtual = date('d/m/y');
		try {
    		InscricaoValidator::validate($request->all());
    		$this->inscricao->fill($request->all());
			$this->inscricao->dataInscricao = $dataAtual;
    		$this->inscricao->save();
			return redirect('/listar/inscricoes');
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
    	}
	}

    public function concluirInscricao(Request $request){
        $dataAtual = date('d/m/y');
		try {
    		InscricaoValidator::validate($request->all());
    		$this->inscricao->fill($request->all());
			$this->inscricao->dataInscricao = $dataAtual;
            //var_dump($request->atividade_id);
            //return "";
            $usuario = Usuario::find($request->usuario_id);
            foreach ($request->atividade_id as $atividade){
                \DB::table('usuario_atividade')->insert(['usuario_id' => $usuario->id, 'atividade_id' => $atividade]);
            }
    		$this->inscricao->save();
			return redirect('/home');
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
    	}
	}

    public function abrirPaginaInscricao(Request $request){
        $hoje = new DateTime("now");
        $eventoSelecionado = Evento::find($request->evento_id);
        $atividades =Atividade::where('evento_id', '=', $request->evento_id)->get();
        $eventos = Evento::where('dataFimInscricoes', '<', $hoje)->orderBy('dataInicio')->get();
        $vouchers = \DB::table('evento_voucher')->join('vouchers', 'vouchers.id', '=', 'voucher_id')->where('evento_id', '=',  $request->evento_id)->get();
        return view('pages/inscricao', ['eventos' => $eventos, 'eventoSelecionado' => $eventoSelecionado, 'atividades' => $atividades, 'vouchers' => $vouchers]);

    }

    public function abrirPaginaInscricoesEvento(Request $request){
        $inscricoes = \App\Inscricao::where('evento_id', '=', $request->evento_id)->get();
        
        $evento = \App\Evento::find($request->evento_id);
        $eventos = \App\Evento::all();
        return view('pages/suasInscricoes', ['inscricoes' => $inscricoes,
                                             'evento' => $evento,
                                             'eventos' => $eventos]);
    }

}
