<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    public function educadoras()
    {
    	return $this->belongsTo('App\Educadora','educadora_id');
    }
}
