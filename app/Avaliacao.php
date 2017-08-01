<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    public function educadoras()
    {
    	return $this->belongsTo('App\Educadora','educadora_id');
    }
}
