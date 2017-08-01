<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Momento;

class MomentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $momentos = Momento::all();

        return view('momentos.index')->withMomentos($momentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('momentos.create');
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
            'nome' => 'required|max:60'));


        $momento = new Momento;

        $momento->nome = $request->nome;

        $momento->descricao = $request->descricao;

        $momento->save();


       Session::flash('message','Registo efectuado com sucesso');


       return redirect()->route('momentos.show',$momento->id);


        




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $momento = Momento::find($id);

        return view('momentos.show')->withMomento($momento);
    }


    public function presentes(Request $request)
{

    dd($request->input('presentes_ids[]'));
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $momento = Momento::find($id);

        return view('momentos.edit')->withMomento($momento);
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

    public function media()
    {
        return view('momentos.media');
    }
}
