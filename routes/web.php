<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*
Route::get('/', function ()
{
	return redirect(url('/login'));
});
*/


Route::group(['middleware'=>['web']], function(){


    # Route Definitions 

    Route::get('/','MainController@getUser');
	Route::get('/turma', 'MainController@getTurma');
    Route::get('/momento','MainController@getMomento');
    Route::get('/diario','MainController@getDiario');
    Route::get('/actividade', 'MainController@getActividade');
	Route::get('/evento','MainController@getEvento');
    Route::get('/relatorio', 'MainController@getRelatorio');
    Route::get('/educadora', 'MainController@getEducadora');
    Route::get('/media','MomentoController@media');
    Route::post('/teste','MomentoController@presentes');
    
    Route::resource('actividades','ActividadeController');
    Route::resource('avaliacaos','AvaliacaoController');
    Route::resource('criancas','CriancaController');
    Route::resource('direcaos','DirecaoController');
    Route::resource('educadoras','EducadoraController');
    Route::resource('eventos','EventoController');
    Route::resource('momentos','MomentoController');
    Route::resource('parentes','ParenteController');
    Route::resource('turmas','TurmaController');
    Route::resource('fotos','FotoController');
    Route::resource('midias','MidiaController');
 


});
