<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Foto;

use Session;

use Image;


class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotos = Foto::all();
        return view('fotos.index')->withFotos($fotos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('fotos.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, array(
            
             'picture' =>'required'

            ));

        $foto = new Foto;
        $picture = $request->file('picture');
        $filename = time() . '.' .$picture->getClientOriginalExtension();
        $location = public_path('img/' . $filename);

        Image::make($picture)->resize(800,800)->save($location);

        $foto->picture =$filename;
          
        $foto->save();

        Session::flash('message','Foto guardada com sucesso!');

        return redirect()->route('fotos.show',$foto->id);



            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foto = Foto::find($id);
        
        return view('fotos.show')->withFoto($foto);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $foto = Foto::find($id);

        return view('fotos.edit')->withFoto($foto);
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
