<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
   public function usuario(){
		return $this->hasOne('App\Usuario');   
   }
}
