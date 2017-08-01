<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Turma;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::all();

        return view('turmas.index')->withTurmas($turmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('turmas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(

            'ano' => 'required|max:20',
            'nivel' => 'required|max:20'
            
            ));

        $turma = new Turma;

        $turma->nome = $request->nome;
        $turma->ano = $request->ano;
        $turma->nivel = $request->nivel;
        $turma->nr_criancas= $request->nr_criancas;
        $turma->descricao = $request->descricao;


       $turma->save();

       Session::flash('message','Turma registada com sucesso!');

       return redirect()->route('turmas.show',$turma->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turma = Turma::find($id);

        return view('turmas.show')->withTurma($turma);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turma = Turma::find($id);

        return view('turmas.edit')->withTurma($turma);
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
