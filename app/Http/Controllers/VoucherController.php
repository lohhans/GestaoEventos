<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function listarVouchers()
    {
        $vouchers = \App\Voucher::all();
        return view('listarVouchers', ['vouchers' => $vouchers]);
    }

    public function adicionarVoucher(Request $request)
    {
        $vouchers = \App\Voucher::where('descricao', '=', $request->descricao)->get();
        if (sizeof($vouchers) == 0) {
            $voucher = new \App\Voucher();
            $voucher->descricao = $request->descricao;
            $voucher->limite = $request->limite;
            $voucher->percentual = $request->percentual;
            $voucher->save();
            return redirect('/listar/vouchers');
        } else {
            return redirect('/listar/vouchers');
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
