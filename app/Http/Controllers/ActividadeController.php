<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividade;
use Session;

class ActividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividade::all();

        return view('actividades.index')->withActividades($actividades);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividades.create');
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
            'nome' => 'required|max:255',
            'data' => 'required',
            'descricao' => 'required|max:255'
            

            ));

        $actividade = new Actividade;

        $actividade->nome = $request->nome;
        $actividade->data = $request->data;
        $actividade->tipo = $request->tipo;
        $actividade->descricao = $request->descricao;

        $actividade->save();

        Session::flash('message',' Sucess Message!');

        return redirect()->route('actividades.show', $actividade->id);
          
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $actividade = Actividade::find($id);

        return view('actividades.show')->withActividade($actividade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividade = Actividade::find($id);

        return('view.edit')->withActividade($actividade);
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
