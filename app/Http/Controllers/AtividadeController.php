<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtividadeController extends Controller{

    public function listarAtividades(){
		$atividades = \App\Atividade::all();
		return view('pages/listarAtividades', ['atividades' => $atividades]);
    }

}
