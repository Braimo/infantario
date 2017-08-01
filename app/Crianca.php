<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crianca extends Model
{
	protected $fillable = array('nome', 'sobrenome','apelido','data_nascimento','genero','foto','turma_id');
    
    public function turmas(){
    	return $this->belongsTo('App\Turma','turma_id');
    }

    public function educadoras()
    {
    	return $this->belongsTo('App\Educadora','educadora_id');
    }


    public function momentos()
    {
    	return $this->belongsTo('App\Momento','momento_id');
    }

    public function parentes()

    {return $this->belongsTo('App\Parente','parente_id');}


    public function midias()

{
    return $this->hasMany('App\Midia');
}
}
