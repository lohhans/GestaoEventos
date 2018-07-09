<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
	public function listarEventos()
    {
        $eventos = \App\Evento::all();
        return view('listarEventos', ['eventos' => $eventos]);
    }

    public function adicionarEvento(Request $request)
    {
        $eventos = \App\Evento::where('descricao', '=', $request->descricao)->get();
        if (sizeof($eventos) == 0) {
            $eventos = new \App\Evento();
				$eventos->localizacao = $request->localizacao;
            $eventos->descricao = $request->descricao;
            $eventos->dataInicio = $request->dataInicio;
            $eventos->dataFim = $request->dataFim;
            $eventos->dataPagamento = $request->dataPagamento;
            $eventos->area_id = $request->area_id;
            $eventos->save();
            return redirect('/listar/eventos');
        } else {

            return redirect('/listar/eventos');
        }
    }
    public function deletarEvento(Request $request)
    {
        $eventos = \App\Evento::where('descricao', '=', $request->descricao)->get();
        foreach ($eventos as $evento) {
            $evento->delete();
        }
        return redirect('/listar/eventos');
    }

    public function atualizarEvento(Request $request)
    {
        $evento = \App\Evento::find($request->id);
        $evento->localizacao = $request->localizacao;
        $evento->descricao = $request->descricao;
        $evento->dataInicio = $request->dataInicio;
        $evento->dataFim = $request->dataFim;
        $evento->dataPagamento = $request->dataPagamento;
        $evento->area_id = $request->area_id;
        $evento->update();

        return redirect('/listar/eventos');
    }

    public function buscarEventoDescricao(Request $request)
    {
        $eventos = \App\Evento::where('descricao', '=', $request->descricao)->get();
        if (sizeof($eventos) != 0) {
            return view('mostrarEvento', ['eventos' => $eventos]);
        } else {
            return "<script>alert('Evento não encontrado'); location= '/buscar/evento';</script>";
        }
    }

}
