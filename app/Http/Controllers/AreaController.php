<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class AreaController extends Controller
{
	public function buscarArea(Request $request){
		$area = \App\Area::where('descricao', '=', $request->descricao)->get();
		return $area;    
   }
   
   public function validarDados(Request $request){
		return $request->descricao === NULL;   
   }    
    
     
    public function cadastrarArea(Request $request){
    	$existe = $this->buscarArea($request);
    	if($this->validarDados($request)){
    		throw new Exception('Preencha todos os campos!');
    	}
    	else if(sizeof($existe) > 0){
    		throw new Exception('Area ja cadastrada!');    	    	
    	}
    	else{
			$area = new \App\Area();
	 		$area->descricao = $request->descricao;
	 		$area->save();
			return redirect('/listar/areas');    	
    	}
    }
    
    public function listarAreas(){
		$areas = \App\Area::all();
		return view('listarAreas', ['areas'=> $areas]);    
    }
    
    public function atualizarArea(Request $request){
	 	$area = $this->buscarArea($request);
	 	if($this->validarDados($request) OR $request->descricaoAtualizada === NULL){
			throw new Exception('Preencha todos os campos!');	 	
	 	}	 	
	 	else if(sizeof($area) <= 0){
			throw new Exception('Area nao cadastrada');		
		}
	 	else{
	 		foreach($area as $areas){
	 			$areas->descricao = $request->descricaoAtualizada;
	 			$areas->update();
			}	
			return redirect('/listar/areas');	 	
	 	}	 	 	    
    }
    
    public function removerArea(Request $request){
		$existe = $this->buscarArea($request);
		if($this->validarDados($request)){
			throw new Exception('Preencha todos os campos!');		
		}
		else if(sizeof($existe) <= 0) {    
 			throw new Exception('Area nao cadastrada');
 			return redirect('/listar/areas');
 		}
 		else{
 			foreach($existe as $area){
				$area->delete(); 			
 			}
			return redirect('/listar/areas'); 		
 		} 	
    }
}