<?php

namespace App\Http\Controllers;
use App\Turma;

/**
* 
*/
class MainController extends Controller 
{
	
public function getTurma(){

	$turma= Turma::find(1);

	return view('turmas.turma')->withTurma($turma);

	
}

public function getMomento(){
	return view('momentos.momento');
}
	
public function getDiario(){
	return view('diarios.diario');
}

public function getActividade(){
	return view('actividades.actividade');
}

public function getEvento(){
	return view('eventos.evento');
}

public function getRelatorio(){
	return view('relatorios.relatorio');
}

public function getEducadora(){
	return view('educadoras.educadora');
}

public function getUser(){
	return view('upload');
}


	}

