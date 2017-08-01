<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Evento;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();

        return view('eventos.index')->withEventos($eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'nome' => 'required|max:60',
            'local' => 'required|max:60',
            'data_publicacao' => 'required',
            'data_ocorrencia' => 'required',
            'descricao' => 'required'

            ));

        $evento = new Evento;

        $evento->nome = $request->nome;
        $evento->local = $request->local;
        $evento->data_publicacao = $request->data_publicacao;
        $evento->data_ocorrencia = $request->data_ocorrencia;
        $evento->descricao = $request->descricao;

        $evento->save();

        Session::flash('message','Evento registado com sucesso!');

        return redirect()->route('eventos.show',$evento->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);

        return view('eventos.show')->withEvento($evento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);

        return view('eventos.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
