<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
protected $fillable =array('nome','ano','nivel', 'nr_criancas', 'descricao');


    public function criancas() {

    	return $this->hasMany('App\Crianca');
    }
}
