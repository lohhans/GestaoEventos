<?php

namespace App\Http\Controllers;

use App\Inscricao;
use App\Validator\InscricaoValidator;
use Illuminate\Http\Request;

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
    		$this->evento->save();
			return redirect('/listar/inscricoes');
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
    	}
	}

}
