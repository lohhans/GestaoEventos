<?php

namespace App\Http\Controllers;
use \App\Evento;
use DateTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoje = new DateTime("now");
        $eventos = Evento::where('dataFimInscricoes', '<', $hoje)->orderBy('dataInicio')->get();
        return view('home',  ['eventos' => $eventos]);
    }
}
