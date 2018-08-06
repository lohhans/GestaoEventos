<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Validator\EnderecoValidator;
use Illuminate\Http\Request;

class EnderecoController extends Controller{

    protected $endereco;

	public function __construct(Endereco $endereco) {
		$this->endereco = $endereco;
	}

  	public function cadastrarEndereco(Request $request){
		try {
    		EnderecoValidator::validate($request->all());
    		$this->endereco->fill($request->all());
    		$this->endereco->save();
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
    	}

}
