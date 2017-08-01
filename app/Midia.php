<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midia extends Model
{
    
    public function momentos()
    {
    	return $this->belongsTo('App\Momento', 'momento_id');
    }

    public function criancas()
    {
    	return $this->belongsTo('App\Crianca','crianca_id');
    }
}
