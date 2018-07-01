<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listar/usuarios', "UsuarioController@listarUsuarios");

Route::get('/adicionar/usuario', function (Request $request){
	return view('adicionarUsuario');
	
});

Route::post('/adicionar/usuario', "UsuarioController@adicionarUsuario");

Route::get('/deletar/usuario', function (Request $request){
	return view('deletarUsuario');
	
});

Route::post('/deletar/usuario', "UsuarioController@deletarUsuario");

Route::post('/atualizar/usuario', "UsuarioController@atualizarUsuario");

Route::get('/buscar/usuario', function (Request $request){
	return view('buscarUsuario');
	
});

Route::get('/usuario', function (Request $request){
	return view('CRUDUsuario');
	
});

Route::post('/buscar/usuario', "UsuarioController@buscarUsuarioCpf");
