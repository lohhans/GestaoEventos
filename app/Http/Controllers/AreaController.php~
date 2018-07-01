<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
	public function buscarArea(Request $request){
		$area = \App\Area::where('descricao', '=', $request->descricao)->get();
		return $area;    
   }    
    
     
    public function cadastrarArea(Request $request){
    	$existe = $this->buscarArea($request);
    	if(sizeof($existe) == 0){
			$area = new \App\Area();
	 		$area->descricao = $request->descricao;
	 		$area->save();    	
			return redirect('/listar/areas');    	
    	}
    	else{
			//lancar excecao aqui
			return redirect('/listar/areas');    	
    	}
    	
    }
    
    public function listarAreas(){
		$areas = \App\Area::all();
		return view('listarAreas', ['areas'=> $areas]);    
    }
    
    public function atualizarArea(Request $request){
	 	$area = $this->buscarArea($request);
	 	if(sizeof($area) > 0){
			foreach($area as $areas){
	 			$areas->descricao = $request->descricaoAtualizada;
	 			$areas->update();
			}
			return redirect('/listar/areas');	 	
	 	}
	 	else{
			//lancar excecao aqui
			return redirect('/listar/areas');	 	
	 	}	 	 	    
    }
    
    public function removerArea(Request $request){
		$existe = $this->buscarArea($request);
		if(sizeof($existe) > 0) {    
 			foreach($existe as $area){
				$area->delete(); 			
 			}
 			return redirect('/listar/areas');
 		}
 		else{
			//lancar excecao aqui
			return redirect('/listar/areas'); 		
 		}
 		   	
    }
}