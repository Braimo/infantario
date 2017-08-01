<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Crianca;

use Session;

use Image;

class CriancaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criancas = Crianca::paginate(5);

        return view('criancas.index')->withCriancas($criancas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('criancas.create');
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
            'nome' => 'required|max:40',
            'apelido' => 'required|max:40',
            'data_nascimento' => 'required',
            'genero' => 'required',
            
            ));

         

         $crianca = new Crianca;


         if($request->hasFile('foto')){

            $foto = $request->file('foto');

            $filename = time() . '.' .$foto->getClientOriginalExtension();

            $location = public_path('img/' . $filename);

            Image::make($foto)->resize(800,400)->save($location);

            $crianca->foto =$filename;
         }

         $crianca->nome = $request->nome;
         $crianca->sobrenome = $request->sobrenome;
         $crianca->apelido = $request->apelido;
         $crianca->data_nascimento = $request->data_nascimento;
         $crianca->genero = $request->genero;
         #$crianca->nivel = $request->nivel;


         $crianca->save();

         Session::flash('message','Registo efectuado com sucesso');

         return redirect()->route('criancas.show',$crianca->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crianca = Crianca::find($id);

        return view('criancas.show')->withCrianca($crianca);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crianca = Crianca::find($id);

        return view('criancas.edit')->withCrianca($crianca);
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
