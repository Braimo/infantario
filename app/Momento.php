<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Momento extends Model
{
    public function educadora()
    {
    	return $this->belongsTo('App\Educadora','educadora_id');
    }

    public function criancas()
    {
    	return $this->hasMany('App\Crianca');
    }

    public function midias()
    {
    	return $this->hasMany('App\Midia');
    }
}
