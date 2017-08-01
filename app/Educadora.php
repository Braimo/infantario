<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educadora extends Model
{
     
    public function avaliacaos(){

    	return $this->hasMany('App\Avaliacao');
    }

    public function momentos()
    {
    	return $this->hasMany('App\Momento');
    }

    public function criancas(){
        
    	return $this->hasMany('App\Crianca');
    }

    public function actividades()
    {
        return $this->hasMany('App\Actividade');
    }

   
}