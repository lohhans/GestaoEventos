<?php

namespace App\Http\Controllers;

use Exception;
use App\Voucher;
use App\Validator\VoucherValidator;
use Illuminate\Http\Request;

class VoucherController extends Controller{

    protected $voucher;

	public function __construct(Voucher $voucher) {
		$this->voucher = $voucher;
	}

    public function listarVouchers()
    {
        $vouchers = \App\Voucher::all();
        return view('pages/listarVouchers', ['vouchers' => $vouchers]);
    }

    public function cadastrarVoucher(Request $request){
		try {
    		VoucherValidator::validate($request->all());
    		$this->voucher->fill($request->all());
    		$this->voucher->save();
            \DB::table('evento_voucher')->insert(['evento_id' => $request->evento_id, 'voucher_id' => $this->voucher->id]);
            $atividades = \App\Atividade::where('evento_id', '=', $request->evento_id)->get();
    		$evento = \App\Evento::find($request->evento_id);
    		$qtdIncricoes = \App\Inscricao::where('evento_id',  '=', $request->evento_id)->count();
    		$areas = \App\Area::all();
    		$vouchers = \DB::table('evento_voucher')->join('vouchers', 'vouchers.id', '=', 'voucher_id')->where('evento_id', '=',  $request->evento_id)->get();
    		return view('pages/seusEventosDetalhamentoEvento', ['areas' => $areas, 'evento' => $evento,
    															'qtdIncricoes' => $qtdIncricoes,
    															'atividades' => $atividades,
    															'vouchers' => $vouchers]);
    	}catch(ValidationException $e) {
			View()->withErros($e->getValidator());
    	}
	}

    public function deletarVoucher(Request $request)
    {
        $vouchers = \App\Voucher::where('descricao', '=', $request->descricao)->get();
        foreach ($vouchers as $voucher) {
            $voucher->delete();
        }
        return redirect('/listar/vouchers');
    }

    public function atualizarVoucher(Request $request)
    {
        $voucher = \App\Voucher::find($request->id);
        $voucher->descricao = $request->descricao;
        $voucher->limite = $request->limite;
        $voucher->percentual = $request->percentual;
        $voucher->update();

        return redirect('/listar/vouchers');
    }

    public function buscarVoucherDescricao(Request $request)
    {
        $vouchers = \App\Voucher::where('descricao', '=', $request->descricao)->get();
        if (sizeof($vouchers) != 0) {
            return view('mostrarVoucher', ['vouchers' => $vouchers]);
        } else {
            return new Exception('Voucher não encontrado');
        }
    }

    public function abrirPaginaCadastroVoucher(Request $request){
        $evento = \App\Evento::find($request->evento_id);
        return view ('pages/cadastrarVoucher', ['evento' => $evento]);

    }
}
