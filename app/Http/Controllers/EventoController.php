<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class EventoController extends Controller
{
	public function listarEventos(){
        $eventos = \App\Evento::all();
        return view('listarEventos', ['eventos' => $eventos]);
  }

  public function adicionarEvento(Request $request){
      $eventos = \App\Evento::where('descricao', '=', $request->descricao)->get();
			$dataAtual = date('d/m/y');
      if(sizeof($eventos) > 0) {
					throw new Exception("Evento já cadastrado");
			}
			else if($dataAtual > $request->dataInicio OR $dataAtual > $request->dataFim){
				throw new Exception ("DataInvalidaException");
			}
			else if($request->dataFim < $request->dataInicio){
				throw new Exception ("DataInvalidaException");
			}
			else if($dataAtual > $request->dataPagamento OR $request->dataPagamento > $request->dataInicio){
				throw new Exception ("DataInvalidaException");
			}
			else {
				$eventos = new \App\Evento();
				$eventos->localizacao = $request->localizacao;
				$eventos->descricao = $request->descricao;
				$eventos->dataInicio = $request->dataInicio;
				$eventos->dataFim = $request->dataFim;
				$eventos->dataPagamento = $request->dataPagamento;
				$eventos->area_id = $request->area_id;
				$eventos->save();
				return redirect('/listar/eventos');
      }
  }

    public function deletarEvento(Request $request){
        $eventos = \App\Evento::where('descricao', '=', $request->descricao)->get();
        foreach ($eventos as $evento) {
            $evento->delete();
        }
        return redirect('/listar/eventos');
    }

    public function atualizarEvento(Request $request){
			$evento = \App\Evento::find($request->id);
			$dataAtual = date('d/m/y');
			if($dataAtual > $request->dataInicio OR $dataAtual > $request->dataFim){
				throw new Exception ("DataInvalidaException");
			}
			else if($request->dataFim < $request->dataInicio){
				throw new Exception ("DataInvalidaException");
			}
			else if($dataAtual > $request->dataPagamento OR $request->dataPagamento > $request->dataInicio){
				throw new Exception ("DataInvalidaException");
			}
			else {
        $evento->localizacao = $request->localizacao;
        $evento->descricao = $request->descricao;
        $evento->dataInicio = $request->dataInicio;
        $evento->dataFim = $request->dataFim;
        $evento->dataPagamento = $request->dataPagamento;
        $evento->area_id = $request->area_id;
        $evento->update();
        return redirect('/listar/eventos');
    }

    public function buscarEventoDescricao(Request $request){
        $eventos = \App\Evento::where('descricao', '=', $request->descricao)->get();
        if (sizeof($eventos) != 0) {
            return view('mostrarEvento', ['eventos' => $eventos]);
        }
				else {
					return redirect('/listar/eventos');
            //return "<script>alert('Evento não encontrado'); location= '/buscar/evento';</script>";
        }
    }
}
