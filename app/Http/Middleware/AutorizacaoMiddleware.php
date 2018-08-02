<?php

namespace App\Http\Middleware;

use Closure;

class AutorizacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        if($request->is("cadastrar/evento")){
            if(\Auth::guest() || \Auth::user()->tipousuario->descricao != "coordenador"){
                return redirect("/")
            }
        }
        return $next($request);
    }
}
