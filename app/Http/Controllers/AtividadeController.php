<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Validator\AtividadeValidator;
use Illuminate\Http\Request;

class AtividadeController extends Controller{

    protected $atividade;

    public function __construct(Atividade $atividade) {
		$this->atividade = $atividade;
	}

    public function cadastrarAtividade(Request $request){
		try {
    		AtividadeValidator::validate($request->all());
    		$this->atividade->fill($request->all());
    		$this->atividade->save();
            $atividades = \App\Atividade::where('evento_id', '=', $request->evento_id)->get();
            $evento = \App\Evento::find($request->evento_id);
            $atividades = \App\Atividade::where('evento_id', '=', $request->evento_id)->get();
    		$evento = \App\Evento::find($request->evento_id);
    		$qtdIncricoes = \App\Inscricao::where('evento_id',  '=', $request->evento_id)->count();
    		$areas = \App\Area::all();
    		$vouchers = \DB::table('evento_voucher')->join('vouchers', 'vouchers.id', '=', 'voucher_id')->where('evento_id', '=',  $request->evento_id)->get();
    		return view('pages/seusEventosDetalhamentoEvento', ['areas' => $areas, 'evento' => $evento,
    															'qtdIncricoes' => $qtdIncricoes,
    															'atividades' => $atividades,
    															'vouchers' => $vouchers]);
            //return view('pages/listarAtividades', ['atividades' => $atividades, 'evento' => $evento]);
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
    	}
	}

    public function listarAtividades(Request $request){
		$atividades = \App\Atividade::where('evento_id', '=', $request->evento_id)->get();
        $evento = \App\Evento::find($request->evento_id);
		return view('pages/listarAtividades', ['evento' => $evento, 'atividades' => $atividades]);
    }

    public function abrirPaginaCadastrarAtividade(Request $request){
        $evento = \App\Evento::find($request->evento_id);;
        return view('pages/cadastrarAtividade', ['evento' => $evento]);
    }
}
