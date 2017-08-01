<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parente extends Model
{
    public function criancas()
    {
    	return $this->hasMany('App\Crianca');
    }
}
