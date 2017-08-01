<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Educadora;

use Session;

class EducadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educadoras = Educadora::paginate(3);
        return view('educadoras.index')->withEducadoras($educadoras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('educadoras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, array( 
            'nome' => 'required|max:255',
            'apelido' => 'required|max:255',
            'data_nascimento' => 'required',
            'morada' => 'required|max:255',
            'contacto' => 'required|max:255',
            'nivel_academico' => 'required|max:255',
            'formacao' => 'required|max:255'

            ));

        $educadora = new Educadora;

        $educadora->nome = $request->nome;
        $educadora->sobrenome = $request->sobrenome;
        $educadora->apelido = $request->apelido;
        $educadora->data_nascimento = $request->data_nascimento;
        $educadora->morada = $request->morada;
        $educadora->contacto = $request->contacto;
        $educadora->nivel_academico = $request->nivel_academico;
        $educadora->formacao = $request->formacao;

        $educadora->save();

        Session::flash('message',' Sucess Message!');

        return redirect()->route('educadoras.show', $educadora->id);




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $educadora = Educadora::find($id);

        return view('educadoras.show')->withEducadora($educadora);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $educadora = Educadora::find($id);

        return view('educadoras.edit')->withEducadora($educadora);
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

    public function getEducadora(){

        return view('educadoras.educadora');

    }
}
