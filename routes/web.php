<?php

Route::get('/', function () {
    return view('telaInicial');
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

Route::get('/cruds', function (Request $request){
	return view('CRUDs');

});

Route::post('/buscar/usuario', "UsuarioController@buscarUsuarioCpf");


Route::get('/listar/areas', "AreaController@listarAreas");

Route::get('/cadastrar/area', function (Request $request) {
			return view('cadastrarArea');
});

Route::get('/remover/area', function(Request $request){
				return view('removerArea');
});

Route::get('/atualizar/area', function(Request $request){
				return view('atualizarArea');
});

Route::get('/login', function(Request $request){
				return view('login');
});

Route::post('/cadastrar/area', "AreaController@cadastrarArea");

Route::post('/remover/area', "AreaController@removerArea");

Route::post('/atualizar/area', "AreaController@atualizarArea");

Route::post('/login', "UsuarioController@login");

Route::get('/area', function (){
	return view('telaAreas');
});

//ARMSTRONG - VOUCHERS

Route::get('/listar/vouchers', "VoucherController@listarVouchers");

Route::get('/adicionar/voucher', function (Request $request){
	return view('adicionarVoucher');

});

Route::post('/adicionar/voucher', "VoucherController@adicionarVoucher");

Route::get('/deletar/voucher', function (Request $request){
	return view('deletarVoucher');

});

Route::post('/deletar/voucher', "VoucherController@deletarVoucher");

Route::get('/buscar/voucher', function (Request $request){
	return view('buscarVoucher');

});

Route::post('/buscar/voucher', "VoucherController@buscarVoucherDescricao");

Route::post('/atualizar/voucher', "VoucherController@atualizarVoucher");

Route::get('/voucher', function (Request $request){
	return view('CRUDVoucher');

});

//EVENTOS

Route::get('/listar/eventos', "EventoController@listarEventos");

Route::get('/adicionar/evento', function (Request $request){
	return view('adicionarEvento');

});

Route::post('/adicionar/evento', "EventoController@adicionarEvento");

Route::get('/deletar/evento', function (Request $request){
	return view('deletarEvento');

});

Route::post('/deletar/evento', "EventoController@deletarEvento");

Route::get('/buscar/evento', function (Request $request){
	return view('buscarEvento');

});

Route::post('/buscar/evento', "EventoController@buscarEventoDescricao");

Route::post('/atualizar/evento', "EventoController@atualizarEvento");

Route::get('/evento', function (Request $request){
	return view('CRUDEvento');

});
