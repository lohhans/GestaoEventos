<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscricaoController extends Controller{

    public function listarInscricoes(){
		$inscricoes = \App\Inscricao::all();
		return view('listarInscricoes', ['inscricoes' => $inscricoes]);
    }

}
