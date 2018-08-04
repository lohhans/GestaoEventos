<?php
//Tela Inicial
Route::get('/', function () {
    return view('pages/index');
});

//Usuario

Route::get('/listar/usuarios', "UsuarioController@listarUsuarios");



Route::get('/cadastrar/usuario', function (Request $request){
	return view('pages/cadastrarUsuario');

});

Route::post('/cadastrar/usuario', "UsuarioController@cadastrarUsuario");

Route::get('/deletar/usuario', function (Request $request){
	return view('pages/deletarUsuario');

});

Route::post('/deletar/usuario', "UsuarioController@deletarUsuario");

Route::post('/atualizar/usuario', "UsuarioController@atualizarUsuario");

Route::get('/buscar/usuario', function (Request $request){
	return view('pages/buscarUsuario');

});

Route::post('/buscar/usuario', "UsuarioController@buscarUsuarioCpf");

Route::get('/usuario', function (Request $request){
	return view('pages/CRUDUsuario');

});

//Tela de CRUDS

Route::get('/cruds', function (Request $request){
	return view('pages/CRUDs');

});

//Area

Route::get('/listar/areas', "AreaController@listarAreas");

Route::get('/cadastrar/area', function (Request $request) {
			return view('pages/cadastrarArea');
});

Route::get('/remover/area', function(Request $request){
				return view('pages/removerArea');
});

Route::get('/atualizar/area', function(Request $request){
				return view('pages/atualizarArea');
});

Route::get('/login', function(Request $request){
				return view('pages/login');
});

Route::post('/cadastrar/area', "AreaController@cadastrarArea");

Route::post('/remover/area', "AreaController@removerArea");

Route::post('/atualizar/area', "AreaController@atualizarArea");

Route::post('/login', "UsuarioController@login");

Route::get('/area', function (){
	return view('pages/CRUDAreas');
});

//Voucher

Route::get('/listar/vouchers', "VoucherController@listarVouchers");

Route::get('/cadastrar/voucher', function (Request $request){
	return view('pages/cadastrarVoucher');

});

Route::post('/cadastrar/voucher', "VoucherController@cadastrarVoucher");

Route::get('/deletar/voucher', function (Request $request){
	return view('pages/deletarVoucher');

});

Route::post('/deletar/voucher', "VoucherController@deletarVoucher");

Route::get('/buscar/voucher', function (Request $request){
	return view('pages/buscarVoucher');

});

Route::post('/buscar/voucher', "VoucherController@buscarVoucherDescricao");

Route::post('/atualizar/voucher', "VoucherController@atualizarVoucher");

Route::get('/voucher', function (Request $request){
	return view('pages/CRUDVoucher');

});

//Eventos

Route::get('/listar/eventos', "EventoController@listarEventos");

Route::get('/cadastrar/evento', "EventoController@abrirCadastrarEvento");

Route::post('/cadastrar/evento', "EventoController@cadastrarEvento");

Route::get('/deletar/evento', function (Request $request){
	return view('pages/deletarEvento');

});

Route::post('/deletar/evento', "EventoController@deletarEvento");

Route::get('/buscar/evento', function (Request $request){
	return view('pages/buscarEvento');

});

Route::post('/buscar/evento', "EventoController@buscarEventoDescricao");

Route::post('/atualizar/evento', "EventoController@atualizarEvento");

Route::get('/evento', function (Request $request){
	return view('pages/CRUDEvento');

});

//Atividade

Route::get('/listar/atividades', "AtividadeController@listarAtividades");

//Inscricao

Route::get('/listar/inscricoes', "InscricaoController@listarInscricoes");

//email

//Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');
Route::get('sendattachmentemail','MailController@attachment_email');
Route::get('sendbasicemail', 'MailController@testeBoleto2');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
