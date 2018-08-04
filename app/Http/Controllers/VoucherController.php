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
			return redirect('/listar/vouchers');
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
            return "<script>alert('Voucher não encontrado'); location= '/buscar/voucher';</script>";
        }
    }
}
