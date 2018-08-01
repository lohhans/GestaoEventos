<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
	public function validarDados(Request $request){
		if($request->nome === NULL OR $request->email === NULL OR $request->cpf === NULL OR $request->login === NULL OR $request->senha === NULL OR $request->tipousuario_id === NULL){
			return true;
		}
		else{
			return false;
		}
   }

    public function listarUsuarios(){
		$usuarios = \App\Usuario::all();
		return view('pages/listarUsuarios', ['usuarios' => $usuarios]);
    }

    public function cadastrarUsuario(Request $request){
		$usuarios = \App\Usuario::where('cpf', '=', $request->cpf)->orWhere('email', '=', $request->email)->orWhere('login', '=', $request->login)->get();
		if($this->validarDados($request)){
    		throw new Exception('Preencha todos os campos!');
    	}
		if(sizeof($usuarios) == 0){
			$usuario = new \App\Usuario();
    		$usuario->nome = $request->nome;
    		$usuario->email = $request->email;
    		$usuario->cpf = $request->cpf;
    		$usuario->login = $request->login;
    		$usuario->senha = $request->senha;

    		$tu = \App\Tipousuario::find($request->tipousuario_id);
    		$usuario->tipousuario_id = $request->tipousuario_id;// $request->tipousuario_id;
    		$usuario->save();
    		return redirect('/listar/usuarios');
		}
		else{
			throw new Exception('Usuario ja cadastrado!');
		}
    }
    public function deletarUsuario(Request $request){
		$usuarios = \App\Usuario::where('cpf', '=', $request->cpf)->get();
		foreach($usuarios as $usuario){
			$usuario->delete();
		}
		return redirect('/listar/usuarios');
    }

    public function atualizarUsuario(Request $request){
		$usuario1 = \App\Usuario::find($request->id);
		$usuario1->nome = $request->nome;
		$usuario1->cpf = $request->cpf;
		$usuario1->login = $request->login;
		$usuario1->senha = $request->senha;
		$usuario1->email = $request->email;
		$usuario1->tipousuario_id = $request->tipousuario_id;
		$usuario1->update();

		return redirect('/listar/usuarios');
    }

    public function buscarUsuarioCpf(Request $request){
		$usuarios = \App\Usuario::where('cpf', '=', $request->cpf)->get();
		if(sizeof($usuarios) != 0){
			return view('mostrarUsuario', ['usuarios' => $usuarios]);
		}
		else{
			return "<script>alert('Usuário não encontrado'); location= '/buscar/usuario';</script>";
		}
    }

    public function login(Request $request){
		$usuario = \App\Usuario::where([['login', '=', $request->login], ['senha', '=', $request->senha]])->get();
		if(sizeof($usuario) == 0) {
    		throw new Exception ('Usuario nao cadastrado');
    	}
    	else {
    		return redirect('/listar/usuarios');

    	}
	}
}
