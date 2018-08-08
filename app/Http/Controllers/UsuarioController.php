<?php

namespace App\Http\Controllers;

use Exception;
use App\Usuario;
use App\Endereco;
use App\Validator\UsuarioValidator;
use App\Validator\EnderecoValidator;
use Illuminate\Http\Request;

class UsuarioController extends Controller{

	protected $usuario;
	protected $endereco;

	public function __construct(Usuario $usuario, Endereco $endereco) {
		$this->usuario = $usuario;
		$this->endereco = $endereco;
	}


    public function listarUsuarios(){
		$usuarios = \App\Usuario::all();
		return view('pages/listarUsuarios', ['usuarios' => $usuarios]);
    }

	public function cadastrarUsuario(Request $request){
		try {
			EnderecoValidator::validate($request->all());
			$this->endereco->fill($request->all());
			$this->endereco->save();
    		UsuarioValidator::validate($request->all());
    		$this->usuario->fill($request->all());
			$this->usuario->endereco_id = $this->endereco->id;
    		$this->usuario->save();
			return redirect('/listar/usuarios');
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
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
		try {
    		UsuarioValidator::validate($request->all());
    		$this->usuario->fill($request->all());
    		$this->usuario->update();
    		return redirect('/listar/usuario');
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
    	}
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
