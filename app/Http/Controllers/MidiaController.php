<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Midia;

use Session;

use Image;


class MidiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $midias = Midia::paginate(2);
        return view('midias.index')->withmidias($midias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('midias.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    

        $midia = new Midia;
        $picture = $request->file('midia');
        $filename = time() . '.' .$picture->getClientOriginalExtension();
        $location = public_path('img/' . $filename);

        Image::make($picture)->resize(800,800)->save($location);

        $midia->midia =$filename;
          
        $midia->save();

        Session::flash('message','midia guardada com sucesso!');

        return redirect()->route('midias.show',$midia->id);



            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $midia = midia::find($id);
        
        return view('midias.show')->withMidia($midia);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $midia = midia::find($id);

        return view('midias.edit')->withmidia($midia);
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
