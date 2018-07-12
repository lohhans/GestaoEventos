<?php
//Tela Inicial - Lohhans
Route::get('/', function () {
    return view('telaInicial');
});

//Usuario - Elyson

Route::get('/listar/usuarios', "UsuarioController@listarUsuarios");

Route::get('/cadastrar/usuario', function (Request $request){
	return view('cadastrarUsuario');

});

Route::post('/cadastrar/usuario', "UsuarioController@cadastrarUsuario");

Route::get('/deletar/usuario', function (Request $request){
	return view('deletarUsuario');

});

Route::post('/deletar/usuario', "UsuarioController@deletarUsuario");

Route::post('/atualizar/usuario', "UsuarioController@atualizarUsuario");

Route::get('/buscar/usuario', function (Request $request){
	return view('buscarUsuario');

});

Route::post('/buscar/usuario', "UsuarioController@buscarUsuarioCpf");

Route::get('/usuario', function (Request $request){
	return view('CRUDUsuario');

});

//Tela de CRUDS

Route::get('/cruds', function (Request $request){
	return view('CRUDs');

});

//Area - Gabrielle

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
	return view('CRUDAreas');
});

//Voucher - Lohhans

Route::get('/listar/vouchers', "VoucherController@listarVouchers");

Route::get('/cadastrar/voucher', function (Request $request){
	return view('cadastrarVoucher');

});

Route::post('/cadastrar/voucher', "VoucherController@cadastrarVoucher");

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

//Eventos - Antonio

Route::get('/listar/eventos', "EventoController@listarEventos");

Route::get('/cadastrar/evento', function (Request $request){
	return view('cadastrarEvento');

});

Route::post('/cadastrar/evento', "EventoController@cadastrarEvento");

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
