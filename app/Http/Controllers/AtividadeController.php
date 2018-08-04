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
			return redirect('/listar/atividades');
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
    	}
	}

    public function listarAtividades(){
		$atividades = \App\Atividade::all();
		return view('pages/listarAtividades', ['atividades' => $atividades]);
    }

}
