<?php

namespace App\Http\Controllers;

use Exception;
use App\Evento;
use App\Validator\EventoValidator;
use Illuminate\Http\Request;

class EventoController extends Controller{

	protected $evento;

	public function __construct(Evento $evento) {
		$this->evento = $evento;
	}

	public function listarEventos(){
        $eventos = \App\Evento::all();
        return view('pages/listarEventos', ['eventos' => $eventos]);
  	}

  	public function cadastrarEvento(Request $request){
		try {
    		EventoValidator::validate($request->all());
    		$this->evento->fill($request->all());
    		$this->evento->save();
			return redirect('/listar/eventos');
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
    	}
	}

	public function atualizarEvento(Request $request){
		try {
    		EventoValidator::validate($request->all());
    		$this->evento->fill($request->all());
    		$this->evento->update();
    		return redirect('/listar/eventos');
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
    	}
	}

    public function deletarEvento(Request $request){
        $eventos = \App\Evento::where('descricao', '=', $request->descricao)->get();
        foreach ($eventos as $evento) {
            $evento->delete();
        }
        return redirect('/listar/eventos');
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
}
