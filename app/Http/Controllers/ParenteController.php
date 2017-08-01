<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Parente;
use Session;

class ParenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parentes = Parente::all();

        return view('parentes.index')->withParentes($parentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('parentes.create');
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
            'nome' => 'required|max:40',
            'apelido' => 'required|max:40',
            'data_nascimento' => 'required',
            'genero' => 'required',
            'grau_parentesco' => 'required',
            'contacto' => 'required',
            'morada' => 'required'

             ));

        $parente = new Parente;

        $parente->nome = $request->nome;
        $parente->sobrenome = $request->sobrenome;
        $parente->apelido = $request->apelido;
        $parente->data_nascimento = $request->data_nascimento;
        $parente->genero = $request->genero;
        $parente->grau_parentesco = $request->grau_parentesco;
        $parente->contacto = $request->contacto;
        $parente->morada = $request->morada;

        $parente->save();

        Session::flash('message','Parente registado com sucesso');

        return redirect()->route('parentes.show',$parente->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parente = Parente::find($id);

        return view('parentes.show')->withParente($parente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parente = Parente::find();

        return view('parentes.edit')->withParente($parente);
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
