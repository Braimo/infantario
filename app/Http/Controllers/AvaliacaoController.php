<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Avaliacao;

class AvaliacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avaliacaos = Avaliacao::all();
        return view('avaliacaos.index')->withAvaliacaos($avaliacaos);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
         return view('avaliacaos.create');
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
            'disciplina' => 'required|max:60',
            'nome' => 'required|max:20',
            'tipo' => 'required|max:30',
            'trimestre' => 'required|max:20',
            'data' => 'required',
            'descricao' => 'required'));


        $avaliacao = new Avaliacao;

        $avaliacao->nome = $request->nome;
        $avaliacao->tipo = $request->tipo;
        $avaliacao->trimestre = $request->trimestre;
        $avaliacao->disciplina = $request->disciplina;
        $avaliacao->data = $request->data;
        $avaliacao->descricao = $request->descricao;

        $avaliacao->save();

        Session::flash('message','Avaliacao Registada com sucesso!');

        return redirect()->route('avaliacaos.show',$avaliacao->id);









    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $avaliacao = Avaliacao::find($id);

        return view('avaliacaos.show')->withAvaliacao($avaliacao);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $avaliacao = Avaliacao::find($id);

        return view('avaliacaos.edit')->withAvaliacao($avaliacao);
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
